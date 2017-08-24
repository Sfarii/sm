<?php

namespace ISETSO\MagazineBundle\Services;

use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use ISETSO\MagazineBundle\Entity\Article\Article;
use ISETSO\MagazineBundle\Entity\Journal\SupportingDocument;
use ISETSO\MagazineBundle\Entity\DetailArticleManagement\Detail;
use ISETSO\MagazineBundle\Entity\Article\ArticleConsumable;
use ISETSO\MagazineBundle\Entity\ArticleManagement\DischargeArticleToUser;
use ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailOrderArticle;
use ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailReturnArticle;
use ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailDischargeArticle;
use ISETSO\MagazineBundle\Entity\Magazine\DetailMagazine;
use ISETSO\MagazineBundle\Entity\Magazine\MagazineDischarge;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\TwigBundle\TwigEngine;
use ISETSO\MagazineBundle\Entity\Journal\Journal;

/**
 * @author Rami Sfari <rami2sfari@gmail.com>
 * @copyright Copyright (c) 2016, PFE
 */
class MagazineEntityManager extends StoreEntity
{
    /**
    * @var Doctrine\ORM\EntityManager
    */
    protected $em;

    /**
    * @var JournalManager
    */
    protected $journalManager;

    /**
    * @var checker
    */
    protected $checker;

    /**
    * @var knp_snappy.pdf
    */
    protected $pdf;

    /**
    * @var Knp\Component\Pager\Paginator
    */
    protected $paginator;

    /**
    * @var templating
    */
    protected $templating;

    /**
    * @param Doctrine\ORM\EntityManager $em
    * @param Knp\Component\Pager\Paginator $paginator
    * @param Symfony\Component\Form\Form $searchForm
    * @param Symfony\Component\Form\Form $formFactory
    */
    public function __construct($em ,$paginator, $checker, $journalManager,$pdf,$templating)
    {
        $this->em = $em;
        $this->paginator = $paginator;
        $this->checker = $checker;
        $this->journalManager = $journalManager;
        $this->pdf = $pdf;
        $this->templating = $templating;
    }

    public function getPDF($html)
    {
        $this->pdf->setOption('header-html', $this->templating->render("ISETSOMagazineBundle:PDF:header.html.twig"));
        $this->pdf->setOption('footer-html', $this->templating->render("ISETSOMagazineBundle:PDF:footer.html.twig"));

        return new Response(
            $this->pdf->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'attachment; filename="pdf.pdf"'
            )
        );
    }

    public function getStock()
    {
        return $this->em->getRepository(journal::class)
                    ->getStock();
    }

    /**
     * @param Repository $repository 
     * @param string $searchField 
     * @return Query
     */
    public function getInventory($repository , $form)
    {
        $query = $repository->findAll();
        
        if ($form->isSubmitted() && $form->isValid()){
            if ($form->has('search') && !empty($form->get('search')->getData())){
                $query = $repository->findByAnything($query , $form->get('search')->getData());
            }
            if ($form->has('dateStart') && $form->has('dateEnd') && !empty($form->get('dateStart')->getData())&& !empty($form->get('dateEnd')->getData())){
                $query = $repository->findBetween($query , $form->get('dateStart')->getData(), $form->get('dateEnd')->getData());
            }
        }
        
        return $query;
    }

    /**
     * @param \ISETSO\UserBundle\Entity\User\User $user
     * @param int $inventoryNumber
     * @return int
     */
    public function findDischargeByUserAndSupportingDoc($user,$inventoryNumber)
    {
        $qteDischarge = $this->em->getRepository(DischargeArticleToUser::class)
                                    ->findDischargeByUserAndSupportingDoc($user,$inventoryNumber)['quantity'];

        $qteRetour = $this->journalManager->getReturnQuantityBySupportingDocument($inventoryNumber);
        
        $qteDischarge = is_null($qteDischarge) ? 0 : $qteDischarge;
        $qteRetour = is_null($qteRetour) ? 0 : $qteRetour;

        return abs($qteDischarge - $qteRetour);
    }

    /**
     * @param \ISETSO\UserBundle\Entity\User\User $user
     * @param int $inventoryNumber
     * @return int
     */
    public function findDischargeByUserAndSupportingDocAndSubStore($user,$inventoryNumber , $store)
    {
        $qteDischarge = $this->em->getRepository(MagazineDischarge::class)
                                    ->findDischargeByUserAndSupportingDocAndSubStore($user,$inventoryNumber,$store)['quantity'];

        $qteRetour = $this->journalManager->getSubStoreReturnQuantityBySupportingDocument($store->getId() , $inventoryNumber);
        
        $qteDischarge = is_null($qteDischarge) ? 0 : $qteDischarge;
        $qteRetour = is_null($qteRetour) ? 0 : $qteRetour;

        return abs($qteDischarge - $qteRetour);
    }




    public function getDischargeSubStoreByUser($user , $store)
    {
        $durable = array();
        $consumable = array();

        foreach ($this->em->getRepository(MagazineDischarge::class)
                        ->findDischargeByUser($user , $store) as $discharge) {

            foreach ($discharge->getDetail() as $detail) {
                $detail->setQteReturned(intval($this->journalManager->getSubStoreReturnQuantityBySupportingDocument($store->getId(),$detail->getSupportingDocument()->getId())));
                if ($detail->getSupportingDocument()->getArticle() instanceOf ArticleConsumable){
                    
                    if (!array_key_exists($detail->getSupportingDocument()->getId(),$consumable)){
                        $consumable[$detail->getSupportingDocument()->getId()] = $detail;
                    }else{
                        $detailArticle = $consumable[$detail->getSupportingDocument()->getId()];
                        $detailArticle->setQteReturned($detailArticle->getQteReturned() + $detail->getQteReturned());
                        $detailArticle->setQuantity($detailArticle->getQuantity() + $detail->getQuantity());
                        
                    }
                }else{
                    if (!array_key_exists($detail->getSupportingDocument()->getArticle()->getId(),$durable)){
                       $durable[$detail->getSupportingDocument()->getArticle()->getId()] = $detail; 
                    }else{
                        $detailArticle =  $durable[$detail->getSupportingDocument()->getArticle()->getId()];
                        $detailArticle->setQuantity($detailArticle->getQuantity() + $detail->getQuantity());
                        $detailArticle->setQteReturned($detailArticle->getQteReturned() + $detail->getQteReturned());
                        $detailArticle->getSupportingDocument()->setInventoryNumber($detailArticle->getSupportingDocument()->getInventoryNumber().",".$detail->getSupportingDocument()->getInventoryNumber());
                        $detailArticle->getSupportingDocument()->setId($detailArticle->getSupportingDocument()->getId().",".$detail->getSupportingDocument()->getId());
                    }
                   
                    
                }
            }
        }
        if (empty($durable) && empty($consumable))
            return array();
        
        return array('durable' => $durable , 'consumable' => $consumable);
    }

    public function getDischargeAndReturnByUser($user)
    {
        $durable = array();
        $consumable = array();

        foreach ($this->em->getRepository(DischargeArticleToUser::class)
                        ->findDischargeByUser($user) as $discharge) {

            foreach ($discharge->getDetail() as $detail) {

                //$detail->setQuantity(abs($detail->getQuantity() - $qteRetour));
                
                if ($detail->getSupportingDocument()->getArticle() instanceOf ArticleConsumable){
                    
                    if (!array_key_exists($detail->getSupportingDocument()->getId(),$consumable)){
                        $detail->setQteReturned(intval($this->journalManager->getReturnQuantityBySupportingDocument($detail->getSupportingDocument()->getId())));
                        $consumable[$detail->getSupportingDocument()->getId()] = $detail;
                        
                    }else{
                        $detailArticle = $consumable[$detail->getSupportingDocument()->getId()];
                        $detailArticle->setQteReturned($detailArticle->getQteReturned() + $detail->getQteReturned());
                        $detailArticle->setQuantity($detailArticle->getQuantity() + $detail->getQuantity());
                        
                    }
                }else{
                    $detail->setQteReturned(intval($this->journalManager->getReturnQuantityBySupportingDocument($detail->getSupportingDocument()->getId())));
                    
                    if (!array_key_exists($detail->getSupportingDocument()->getArticle()->getId(),$durable)){
                       $durable[$detail->getSupportingDocument()->getArticle()->getId()] = $detail; 
                    }else{
                        $detailArticle =  $durable[$detail->getSupportingDocument()->getArticle()->getId()];
                        $detailArticle->setQuantity($detailArticle->getQuantity() + $detail->getQuantity());
                        $detailArticle->setQteReturned($detailArticle->getQteReturned() + $detail->getQteReturned());
                        $detailArticle->getSupportingDocument()->setInventoryNumber($detailArticle->getSupportingDocument()->getInventoryNumber().",".$detail->getSupportingDocument()->getInventoryNumber());
                        $detailArticle->getSupportingDocument()->setId($detailArticle->getSupportingDocument()->getId().",".$detail->getSupportingDocument()->getId());
                    }
                   
                    
                }
            }
        }
        if (empty($durable) && empty($consumable))
            return array();


        return array('durable' => $durable , 'consumable' => $consumable);
    }

    public function getGeneratedInventoryNumber()
    {
        $result = $this->em->getRepository(SupportingDocument::class)->getLastInventoryNumber()["inventoryNumber"];
        
        if(is_null($result)){
            return 1;
        }else if (is_numeric($result)){
            $result++;
            
        }else if (is_string($result)){
            $lenght = abs( strlen($result) - strpos($result, "/") ) + 1 ;
            $result = intval(substr($result,0,$lenght)) + 1;
        }

        while (!$this->isUniqueInventoryNumber($result)) {
            $result++;
        }
        return $result;
    }

    public function isUniqueInventoryNumber($inventoryNumber)
    {
        $result = $this->em->getRepository(SupportingDocument::class)->isUniqueInventoryNumber($inventoryNumber);
        if (is_null($result)){
            return true;
        }else{
            return false;
        }
    }

    /**
     * @param Repository $repository 
     * @param string $role 
     * @param User $user
     * @param string $searchField 
     * @return Query
     */
    public function getEntityBySubEntity($object,$repository ,$user, $role , $form)
    {
        $query = null;

        if ($this->checker->isGranted('Manager',$role) && $user->isUser($user)){
            $query = $repository->findAllBy($object);
        }else 
        if ($this->checker->isGranted('View',$role) && $user->isUser($user)){
            $query = $repository->findByUserAndBy($object,$user);
            
        }else{
            throw new AccessDeniedException('Access Denied', null);
        }

        if ($form->isSubmitted() && $form->isValid()){
            $query = $repository->findByAnything($query , $form->get('search')->getData());
        }
        
        return $query;
    }

    /**
     * @param array $listOfSupportingDocument
     * @return array
    */
    public function supportingDocumentToArray($listOfSupportingDocument)
    {
        $data = array();
        foreach ($listOfSupportingDocument as $value) {
            $value->setArticle($this->em->getRepository(Article::class)->find($value->getArticle()->getId()));
            $data[]  = array('id' => $value->getArticle()->getId() ,
                            'article_designation' => $value->getArticle()->getDesignation(),
                            'quantity' => $value->getQuantity(),
                            'inventoryNumber' => $value->getInventoryNumber(),
                            'price' => $value->getPrice(),
                            'family' => $value->getArticle()->getSubFamily()->getFamily()->getDesignation(),
                            'subFamily' => $value->getArticle()->getSubFamily()->getDesignation(),
                            'family_id' => $value->getArticle()->getSubFamily()->getFamily()->getId(),
                            'subFamily_id' => $value->getArticle()->getSubFamily()->getId());
        }
        return $data;
    }

    /**
     * @param array $listOfSupportingDocument
     * @return array
    */
    public function supportingDocumentInDataBaseToArray($listOfSupportingDocument)
    {
        $data = array();
        foreach ($listOfSupportingDocument as $value) {
            $value->setArticle($this->em->getRepository(Article::class)->find($value->getArticle()->getId()));
            $data[]  = array('id' => $value->getId() ,
                            'article_id' => $value->getArticle()->getId(),
                            'article_designation' => $value->getArticle()->getDesignation(),
                            'quantity' => $value->getQuantity(),
                            'inventoryNumber' => $value->getInventoryNumber(),
                            'price' => $value->getPrice(),
                            'family' => $value->getArticle()->getSubFamily()->getFamily()->getDesignation(),
                            'subFamily' => $value->getArticle()->getSubFamily()->getDesignation(),
                            'family_id' => $value->getArticle()->getSubFamily()->getFamily()->getId(),
                            'subFamily_id' => $value->getArticle()->getSubFamily()->getId());
        }
        return $data;
    }

    /**
     * @param array $listOfDetail
     * @return array
    */
    public function detailOrderArticleToArray($listOfDetail)
    {
        $data = array();
        foreach ($listOfDetail as $value) {
            $value->setArticle($this->em->getRepository(Article::class)->find($value->getArticle()->getId()));
            $data[]  = array(
                            'id'=> $value->getId(),
                            'article_id' => $value->getArticle()->getId() ,
                            'article_designation' => $value->getArticle()->getDesignation(),
                            'quantity' => $value->getQuantity(),
                            'family' => $value->getArticle()->getSubFamily()->getFamily()->getDesignation(),
                            'subFamily' => $value->getArticle()->getSubFamily()->getDesignation(),
                            'family_id' => $value->getArticle()->getSubFamily()->getFamily()->getId(),
                            'subFamily_id' => $value->getArticle()->getSubFamily()->getId());
        }
        return $data;
    }

    /**
     * @param array $listOfDetail
     * @return array
    */
    public function detailArticleToArray($listOfDetail)
    {

        $data = array();
        foreach ($listOfDetail as $value) {
            $value->getSupportingDocument()->setArticle($this->em->getRepository(Article::class)->find($value->getSupportingDocument()->getArticle()->getId()));
            
            $data[]  = array(    'article_designation' => $value->getSupportingDocument()->getArticle()->getDesignation(),
                                'article_id' => $value->getSupportingDocument()->getArticle()->getId(),
                                'id' => $value->getId(),
                                'supportingDocument_id' => $value->getSupportingDocument()->getId(),
                                'inventoryNumber' => $value->getSupportingDocument()->getInventoryNumber(),
                                'family' => $value->getSupportingDocument()->getArticle()->getSubFamily()->getFamily()->getDesignation(),
                                'subFamily' => $value->getSupportingDocument()->getArticle()->getSubFamily()->getDesignation(),
                                'family_id' => $value->getSupportingDocument()->getArticle()->getSubFamily()->getFamily()->getId(),
                                'subFamily_id' => $value->getSupportingDocument()->getArticle()->getSubFamily()->getId(),
                                'quantity' => $value->getQuantity(),
                                'classType' => str_replace("\\", "" ,strrchr (get_class($value->getSupportingDocument()->getArticle()),"\\"))
                            );
        }
        return $data;
    }

    /**
     * @param array $listOfDetail
     * @return array
    */
    public function detailToArray($listOfDetail)
    {
        $data = array();
        foreach ($listOfDetail as $value) {
            $value->getSupportingDocument()->setArticle($this->em->getRepository(Article::class)->find($value->getSupportingDocument()->getArticle()->getId()));
            
            if ($value->getSupportingDocument()->getArticle() instanceOf ArticleConsumable){
                $data[]  = array('article_designation' => $value->getSupportingDocument()->getArticle()->getDesignation(),
                                'id' => $value->getSupportingDocument()->getArticle()->getId(),
                                'supportingDocument_id' => array($value->getSupportingDocument()->getId()),
                                'inventoryNumber' => $value->getSupportingDocument()->getInventoryNumber(),
                                'family' => $value->getSupportingDocument()->getArticle()->getSubFamily()->getFamily()->getDesignation(),
                                'subFamily' => $value->getSupportingDocument()->getArticle()->getSubFamily()->getDesignation(),
                                'family_id' => $value->getSupportingDocument()->getArticle()->getSubFamily()->getFamily()->getId(),
                                'subFamily_id' => $value->getSupportingDocument()->getArticle()->getSubFamily()->getId(),
                                'quantity' => $value->getQuantity(),
                                'classType' => str_replace("\\", "" ,strrchr (get_class($value->getSupportingDocument()->getArticle()),"\\"))
                            );
            }else{
                if (!array_key_exists($value->getSupportingDocument()->getArticle()->getDesignation(), $data)){
                $data[$value->getSupportingDocument()->getArticle()->getDesignation()]  = array('article_designation' => $value->getSupportingDocument()->getArticle()->getDesignation(),
                                                                                                'id' => $value->getSupportingDocument()->getArticle()->getId(),
                                                                                                'supportingDocument_id' => array($value->getSupportingDocument()->getId()),
                                                                                                'inventoryNumber' => array($value->getSupportingDocument()->getInventoryNumber()),
                                                                                                'family' => $value->getSupportingDocument()->getArticle()->getSubFamily()->getFamily()->getDesignation(),
                                                                                                'subFamily' => $value->getSupportingDocument()->getArticle()->getSubFamily()->getDesignation(),
                                                                                                'family_id' => $value->getSupportingDocument()->getArticle()->getSubFamily()->getFamily()->getId(),
                                                                                                'subFamily_id' => $value->getSupportingDocument()->getArticle()->getSubFamily()->getId(),
                                                                                                'quantity' => $value->getQuantity(),
                                                                                                'classType' => str_replace("\\", "" ,strrchr (get_class($value->getSupportingDocument()->getArticle()),"\\"))
                                                                                            );
                }else{
                    $data[$value->getSupportingDocument()->getArticle()->getDesignation()]['inventoryNumber'][] = $value->getSupportingDocument()->getInventoryNumber();
                    $data[$value->getSupportingDocument()->getArticle()->getDesignation()]['supportingDocument_id'][] = $value->getSupportingDocument()->getId();
                    $data[$value->getSupportingDocument()->getArticle()->getDesignation()]['quantity'] += 1;
                }
            }

            
            
        }
        return array_values($data);
    }


    /**
     * @param array $content
     * @return array
    */
    public function arrayToSupportingDocument($content)
    {
        if (!empty($content))
        {
            $data = json_decode($content, true); 
            $supportingDocument = new SupportingDocument();
            if (array_key_exists ( 'id' , $data )){
                $supportingDocument->setId($data['id']);
            }
            $supportingDocument->setArticle($this->em->getRepository(Article::class)->find($data['article']));
            $supportingDocument->setInventoryNumber($data['inventoryNumber']);
            $supportingDocument->setPrice($data['price']);
            $supportingDocument->setQuantity($data['quantity']);

            return $supportingDocument;
        }

        return null;
    }

    /**
     * @param array $content
     * @return array
    */
    public function arrayToArticleDetail($content ,$object)
    {
        if (!empty($content) && !is_null($object))
        {
            $data = json_decode($content, true); 
            if (array_key_exists ( 'id' , $data )){
                $object->setId($data['id']);
            }
            $object->setArticle($this->em->getRepository(Article::class)->find($data['article']));
            $object->setQuantity($data['quantity']);
            return $object;
            
        }
        return null;
    }

    /**
     * @param array $content
     * @param object $object
     * @return array
    */
    public function arrayToDetail($content , $object)
    {
        if (!empty($content) && !is_null($object))
        {
            $data = json_decode($content, true); 

            if (!is_array($data['supportingDocument'])){
                if (array_key_exists ( 'id' , $data )){
                    $object->setId($data['id']);
                }
                $object->setSupportingDocument($this->em->getRepository(SupportingDocument::class)->find($data['supportingDocument']));
                $object->setQuantity($data['quantity']);
                return $object;
            }else{
                $listObject = array();
                foreach ($data['supportingDocument'] as $value) {
                    $val = clone $object;
                    $val->setSupportingDocument($this->em->getRepository(SupportingDocument::class)->find($value));
                    $val->setQuantity(1);
                    $listObject[] = $val;
                }
                return $listObject;
            }
        }

        return null;
    }


    /**
     * @param ISETSO\UserBundle\Entity\User\User $user
     * @param object $entity
     * @return void
     */
    public function save ($entity , $user = null){

        if ( !is_null($user)){
            $entity->setUser($user);
        }

        $this->em->persist($entity);
        $this->em->flush();
    }

    /**
     * @param ISETSO\UserBundle\Entity\User\User $user
     * @param object $entity
     * @return void
     */
    public function saveJournalConsumable ($entity ,$list = array() , $user = null){

        if ( !is_null($user)){
            $entity->setUser($user);
        }

        foreach ($list as $value) {

            if (!$this->isUniqueInventoryNumber($value->getInventoryNumber())){
                $value->setInventoryNumber($this->getGeneratedInventoryNumber());
            }
            
            $value->setArticle($this->em->getRepository(Article::class)->find($value->getArticle()->getId()));
            $this->em->persist($value);
            $this->em->flush();
            $entity->addSupportingDocument($value);
        }

        $this->em->persist($entity);
        $this->em->flush();
    }

    /**
     * @param ISETSO\UserBundle\Entity\User\User $user
     * @param object $entity
     * @return void
     */
    public function saveJournalDurable ($entity ,$list = array() , $user = null){

        if ( !is_null($user)){
            $entity->setUser($user);
        }

        foreach ($list as $value) {

            for ($i=1; $i <= $value->getQuantity() ; $i++) { 

                $supportingDocument = new SupportingDocument();
                $supportingDocument->setInventoryNumber($value->getInventoryNumber()."/".$i);

                if ($this->isUniqueInventoryNumber($supportingDocument->getInventoryNumber())){
                    
                    $supportingDocument->setArticle($this->em->getRepository(Article::class)->find($value->getArticle()->getId()));
                    $supportingDocument->setPrice($value->getPrice());
                    $supportingDocument->setQuantity(1);
                    $entity->addSupportingDocument($supportingDocument);

                    $this->em->persist($supportingDocument);
                    
                }
            }
            
        }

        $this->em->persist($entity);
        $this->em->flush();
    }

    /**
     * @param ISETSO\UserBundle\Entity\User\User $user
     * @param object $entity
     * @return void
     */
    public function saveArticleDetail ($entity, $list = array() , $user = null){

        if ( !is_null($user)){
            $entity->setUser($user);
        }

        foreach ($list as $value) {
            //$value->setArticle($this->em->getRepository(Article::class)->find($value->getArticle()->getId()));
            $value->setSupportingDocument($this->em->getRepository(SupportingDocument::class)->find($value->getSupportingDocument()->getId()));
            $this->em->persist($value);
            $entity->addDetail($value);
        }

        $this->em->persist($entity);
        $this->em->flush();
    }

    /**
     * @param ISETSO\UserBundle\Entity\User\User $user
     * @param object $entity
     * @return void
     */
    public function saveOrderArticleDetail ($entity, $list = array() , $user = null){

        if ( !is_null($user)){
            $entity->setUser($user);
        }

        foreach ($list as $value) {
            $value->setArticle($this->em->getRepository(Article::class)->find($value->getArticle()->getId()));
            //$value->setSupportingDocument($this->em->getRepository(SupportingDocument::class)->find($value->getSupportingDocument()->getId()));
            $this->em->persist($value);
            $entity->addDetail($value);
        }

        $this->em->persist($entity);
        $this->em->flush();
    }

    /**
     * @param ISETSO\UserBundle\Entity\User\User $user
     * @param object $entity
     * @param object $magazine
     * @return void
     */
    public function saveMagazineDetail ($magazine,$entity, $list = array() , $user = null){

        if ( !is_null($user)){
            $entity->setUser($user);
        }

        foreach ($list as $value) {
            $value->setSupportingDocument($this->em->getRepository(SupportingDocument::class)->find($value->getSupportingDocument()->getId()));
            $this->em->persist($value);
            $entity->addDetail($value);
        }

        $entity->setToSubStore($magazine);
        $this->em->persist($entity);
        $this->em->flush();
    }

    /**
     * @param object $entity
     * @return bool
     */
    public function checkDischargeArticleDetail ($entity,$etat){
        $error = array();
        if ($etat == "a"){
            foreach ($entity->getDetail() as $value) {
                if ($value->getQuantity() > $this->journalManager->getStockById($value->getSupportingDocument()->getId())){
                    $error[] = $value->getSupportingDocument()->getInventoryNumber()." ".$this->journalManager->getStockById($value->getSupportingDocument()->getId());
                }
            }
            if(count($error)){
                return $error;
            }
        }

        $entity->setEtat($etat);
        $this->em->persist($entity);
        $this->em->flush();
        return $error;
    }

    /**
     * @param object $entity
     * @return bool
     */
    public function checkSubStoreDischargeArticleDetail ($entity,$etat){
        $error = array();
        if ($etat == "a"){
            foreach ($entity->getDetail() as $value) {
                if ($value->getQuantity() > $this->journalManager->getSubStoreStockById($entity->getFromMagazine()->getId() ,$value->getSupportingDocument()->getId())){
                    $error[] = $value->getSupportingDocument()->getInventoryNumber()." ".$this->journalManager->getSubStoreStockById($entity->getFromMagazine()->getId() ,$value->getSupportingDocument()->getId());
                }
                //$error[] = $value->getSupportingDocument()->getInventoryNumber()." ".$this->journalManager->getSubStoreStockById($entity->getFromMagazine()->getId() ,$value->getSupportingDocument()->getId());
            }

            if(count($error)){
                return $error;
            }
        }

        $entity->setEtat($etat);
        $this->em->persist($entity);
        $this->em->flush();
        return $error;
    }

    /**
     * @param ISETSO\UserBundle\Entity\User\User $user
     * @param object $entity
     * @return bool
     */
    public function checkReturnArticleDetail ($entity,$etat){
        $error = array();
        if ($etat == "a"){
            foreach ($entity->getDetail() as $value) {
                if ($value->getQuantity() > $this->findDischargeByUserAndSupportingDoc ($entity->getUser() ,$value->getSupportingDocument()->getId())){
                    $error[] = $value->getSupportingDocument()->getInventoryNumber()." ".$this->findDischargeByUserAndSupportingDoc ($entity->getUser() ,$value->getSupportingDocument()->getId());
                }

            }
            if(count($error)){
                return $error;
            }
        }
        

        $entity->setEtat($etat);
        $this->em->persist($entity);
        $this->em->flush();
        return $error;
    }

    /**
     * @param ISETSO\UserBundle\Entity\User\User $user
     * @param object $entity
     * @return bool
     */
    public function checkSubStoreReturnArticleDetail ($entity,$etat){
        $error = array();
        if ($etat == "a"){
            foreach ($entity->getDetail() as $value) {
                if ($value->getQuantity() > $this->findDischargeByUserAndSupportingDocAndSubStore ($entity->getUser() ,$value->getSupportingDocument()->getId(),$entity->getToSubStore())){
                    $error[] = $value->getSupportingDocument()->getInventoryNumber()." ".$this->findDischargeByUserAndSupportingDocAndSubStore ($entity->getUser() ,$entity->getSupportingDocument()->getId(),$value->getToSubStore());
                }
            }
            if(count($error)){
                return $error;
            }
        }
        

        $entity->setEtat($etat);
        $this->em->persist($entity);
        $this->em->flush();
        return $error;
    }

    /**
     * @param object $entity
     * @return void
     */
    public function delete ($entity, $list = array()){

        foreach ($list as $value) {
            $this->em->remove($value);
        }
        
        $this->em->remove($entity);
        $this->em->flush();
    }

    /**
     * @param object $entity
     * @param array $list
     * @return bool
     */
    public function newEntitySaveInSession($entity, $list)
    {
        if ($this->exist($entity->getArticle()->getId(),$list) == null){

            $list->add($entity);

            return true;
        }else{
            return false;
        }

    }

    /**
     * @param object $entity
     * @param array $list
     * @return void
     */
    public function newArticleDurableSaveInDataBase($entity, $list)
    {
        for ($i=1; $i <= $entity->getQuantity() ; $i++) { 

            $supportingDocument = clone $entity;
            $supportingDocument->setInventoryNumber($entity->getInventoryNumber()."/".$i);

            if (!$this->isUniqueInventoryNumber($supportingDocument->getInventoryNumber())){
                $supportingDocument->setInventoryNumber($this->getGeneratedInventoryNumber()."/".$i);
            }
                
            $supportingDocument->setQuantity(1);
            $list->add($supportingDocument);

            $this->em->persist($supportingDocument);

        }

        $this->em->flush();
    }

    /**
     * @param object $entity
     * @param array $list
     * @return bool
     */
    public function newEntitySaveInDataBase($entity, $list)
    {
        if ($this->exist($entity->getArticle()->getId(),$list) == null){

            $this->em->persist($entity);
            $list->add($entity);
            $this->em->flush();

            return true;

        }else{

            return false;
        }

    }

    /**
     * @param object $entity
     * @param array $list
     * @return bool
     */
    public function newDetailSaveInSession($entity, $list)
    {
        if (!is_array($entity)){

            if ($this->existDetail($entity->getSupportingDocument()->getId(),$list) == null){
                $list->add($entity);
                return true;
            }
        }else{
            foreach ($entity as $value) {
                if ($this->existDetail($value->getSupportingDocument()->getId(),$list) == null){
                    $list->add($value);
                }
            }
            return true;
        }
        
            
        
        return false;
    }

    /**
     * @param object $entity
     * @param array $list
     * @return bool
     */
    public function newDetailSaveInDataBase($entity, $list)
    {
        if (!is_array($entity)){
            if ($this->existDetail($entity->getSupportingDocument()->getId(),$list) == null){

                $this->em->persist($entity);
                $list->add($entity);
                $this->em->flush();

                return true;
            }
        }else{
            foreach ($entity as $value) {
                if ($this->existDetail($value->getSupportingDocument()->getId(),$list) == null){
                    $this->em->persist($value);
                    $list->add($value);
                }
                $this->em->flush();
            }
            return true;
        }

        return false;
    }

    /**
     * @param object $entity
     * @param array $list
     * @param int $id
     * @return bool
     */
    public function editEntitySaveInSession($entity, $list,$id)
    {
        if ($this->exist($entity->getArticle()->getId(),$list) == null || $entity->getArticle()->getId() == $id){
            $list->removeElement($this->exist($id,$list));
            $list->add($entity);
            return true;
        }

        return false;
        
    }

    /**
     * @param object $entity
     * @param array $list
     * @return bool
     */
    public function editDetailSaveInSession($entity, $list, $id)
    {
        if (!is_array($entity)){

            if ($this->existDetail($entity->getSupportingDocument()->getId(),$list) == null || $entity->getSupportingDocument()->getId() == $id){
                $list->removeElement($this->existDetail($id,$list));
                $list->add($entity);
                return true;
            }
        }else{
            foreach ($entity as $value) {
                if ($this->existDetail($value->getSupportingDocument()->getId(),$list) == null){
                    $list->removeElement($this->existDetail($value->getSupportingDocument()->getId(),$list));
                    $list->add($value);
                }
            }
            return true;
        }
        
            
        
        return false;
    }

    /**
     * @param object $entity
     * @param array $list
     * @return bool
     */
    public function editOrderDetailSaveInDataBase($entity, $list, $id)
    {
        if ($this->exist($entity->getArticle()->getId(),$list) == null || $entity->getId() == $id){
            $detail = $this->em->getRepository(DetailOrderArticle::class)->find($entity->getId());
            $detail->setArticle($entity->getArticle());
            $detail->setQuantity($entity->getQuantity());
            
            $this->em->flush();

            return true;
        }
        
        return false;
    }

    /**
     * @param object $entity
     * @param array $list
     * @return bool
     */
    public function editReturnDetailSaveInDataBase($entity, $list, $id)
    {
        if ($this->existDetail($entity->getSupportingDocument()->getId(),$list) == null || $entity->getId() == $id){
            $detail = $this->em->getRepository(DetailReturnArticle::class)->find($entity->getId());
            $detail->setSupportingDocument($entity->getSupportingDocument());
            $detail->setQuantity($entity->getQuantity());
            
            $this->em->flush();

            return true;
        }
        
        return false;
    }

    /**
     * @param object $entity
     * @param array $list
     * @return bool
     */
    public function editDischargeDetailSaveInDataBase($entity, $list, $id)
    {
        if ($this->existDetail($entity->getSupportingDocument()->getId(),$list) == null || $entity->getId() == $id){
            $detail = $this->em->getRepository(DetailDischargeArticle::class)->find($entity->getId());
            $detail->setSupportingDocument($entity->getSupportingDocument());
            $detail->setQuantity($entity->getQuantity());
            
            $this->em->flush();

            return true;
        }
        
        return false;
    }

    /**
     * @param object $entity
     * @param array $list
     * @return bool
     */
    public function editDischargeStoreDetailSaveInDataBase($entity, $list, $id)
    {
        if ($this->existDetail($entity->getSupportingDocument()->getId(),$list) == null || $entity->getId() == $id){
            $detail = $this->em->getRepository(DetailMagazine::class)->find($entity->getId());
            $detail->setSupportingDocument($entity->getSupportingDocument());
            $detail->setQuantity($entity->getQuantity());
            
            $this->em->flush();

            return true;
        }
        
        return false;
    }

    /**
     * @param object $entity
     * @param array $list
     * @param int $id
     * @return bool
     */
    public function editEntitySaveInDataBase($entity, $list, $id)
    {
        if ($this->exist($entity->getArticle()->getId(),$list) == null || $entity->getId() == $id){
            $supportingDocument = $this->em->getRepository(SupportingDocument::class)->find($entity->getId());
            $supportingDocument->setArticle($entity->getArticle());
            $supportingDocument->setPrice($entity->getPrice());
            $supportingDocument->setQuantity($entity->getQuantity());
            
            if (!$this->isUniqueInventoryNumber($entity->getInventoryNumber())){
                $supportingDocument->setInventoryNumber($this->getGeneratedInventoryNumber());
            }else{
                $supportingDocument->setInventoryNumber($entity->getInventoryNumber());    
            }
            
            $this->em->flush();

            return true;
        }
        
        return false;
    }

    /**
     * @param int $id
     * @param array $list
     * @return void
     */
    public function deleteEntitySaveInSession( $id, $list)
    {
        if ($this->exist($id,$list) != null){
            $list->removeElement($this->exist($id,$list));
        }

    }

    /**
     * @param int $id
     * @param array $list
     * @return void
     */
    public function deleteDetailSaveInSession( $id, $list)
    {
        if ( !is_null($list)){
            foreach ($list as $value) {
                if ($value->getSupportingDocument()->getId() == $id){
                    $list->removeElement($value);
                }
            }
        }

    }

    /**
     * @param int $id
     * @param array $list
     * @return object
     */
    public function exist($id , $list)
    {
        if (!is_null($list)){
            foreach ($list as $value) {
                if ($value->getArticle()->getId() == $id){
                    return $value;
                }
            }
        }
        return null;
    }

    /**
     * @param int $id
     * @param array $list
     * @return object
     */
    public function existDetail($id , $list)
    {
        if (!is_null($list)){
            foreach ($list as $value) {
                if ($value->getSupportingDocument()->getId() == $id){
                    return $value;
                }
            }
        }
        return null;
    }

    

    /**
     * Creates sort.
     *
     * @param Query $query 
     * @param Symfony\Component\HttpFoundation\Request $request
     * @param int $nb_page  
     * @return Knp\Component\Pager\Paginator
     */
    public function sksort(&$array, $subkey="id", $sort_ascending=false) {

        if (count($array))
            $temp_array[key($array)] = array_shift($array);

        foreach($array as $key => $val){
            $offset = 0;
            $found = false;
            foreach($temp_array as $tmp_key => $tmp_val)
            {
                if(!$found and strtolower($val[$subkey]) > strtolower($tmp_val[$subkey]))
                {
                    $temp_array = array_merge(    (array)array_slice($temp_array,0,$offset),
                                                array($key => $val),
                                                array_slice($temp_array,$offset)
                                              );
                    $found = true;
                }
                $offset++;
            }
            if(!$found) $temp_array = array_merge($temp_array, array($key => $val));
        }

        if ($sort_ascending) $array = array_reverse($temp_array);

        else $array = $temp_array;
    }

    public function getJournalManager()
    {
        return $this->journalManager;
    }
}
?>