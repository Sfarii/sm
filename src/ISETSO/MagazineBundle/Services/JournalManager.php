<?php

namespace ISETSO\MagazineBundle\Services;

use ISETSO\MagazineBundle\Entity\Journal\Journal;
use ISETSO\MagazineBundle\Entity\ArticleManagement\OrderArticle;
use ISETSO\MagazineBundle\Entity\ArticleManagement\ReturnArticleToCentralStore;
use ISETSO\MagazineBundle\Entity\ArticleManagement\DischargeArticle;
use ISETSO\MagazineBundle\Entity\ArticleManagement\DischargeArticleToUser;
use ISETSO\MagazineBundle\Entity\ArticleManagement\DischargeArticleToMagazine;
use ISETSO\MagazineBundle\Entity\ArticleManagement\ReturnArticleToSubStore;
use ISETSO\MagazineBundle\Entity\Magazine\MagazineDischarge;
use ISETSO\MagazineBundle\Entity\Magazine\Magazine;
/**
 * @author Rami Sfari <rami2sfari@gmail.com>
 * @copyright Copyright (c) 2016, PFE
 */
class JournalManager
{
    const STOCK = "Stock";
    const BL = "BL";
    const Facture = "Facture";
    /**
    * @var Doctrine\ORM\EntityManager
    */
    private $em;

    /**
    * @param Doctrine\ORM\EntityManager $em
    */
    public function __construct($em)
    {
        $this->em = $em;
    }

    /**
     * @return array
     */
    public function getAllStockFromJournal()
    {   
        return  $this->em->getRepository(Journal::class)
                            ->getAllStock();
    }

    /**
     * @param int $id
     * @return array
     */
    public function getReturnQuantityBySupportingDocument($id)
    {   
        return  $this->em->getRepository(ReturnArticleToCentralStore::class)
                            ->getReturnById($id)['quantity'];
    }

    /**
     * @param int $id
     * @return array
     */
    public function getDischargeQuantityBySupportingDocument($id)
    {   
        return  $this->em->getRepository(DischargeArticle::class)
                            ->getDischargeById($id)['quantity'];
    }

    /**
     * @return array
     */
    public function getAllStock(){

        $stockTotal = array();
        foreach ($this->getAllStockFromJournal() as $journal) {

            $qteDischarge = is_null($this->getDischargeQuantityBySupportingDocument($journal['sd_id'])) ? 0 : $this->getDischargeQuantityBySupportingDocument($journal['sd_id']);
            
            $qteRetour = is_null($this->getReturnQuantityBySupportingDocument($journal['sd_id'])) ? 0 : $this->getReturnQuantityBySupportingDocument($journal['sd_id']);
            
            $qte = abs( ($journal['quantity'] + $qteRetour) - $qteDischarge  );

            $stockTotal[]=array('text' => $journal['inventoryNumber'],
                                'id' => $journal['sd_id'],
                                'article_id' => $journal['article_id'],
                                'quantity'=>  $qte ,
                                'price'=>  $journal['price'],
                                'article' => $journal['article'],
                                'unit' => $journal['unit'],
                                'subFamily' =>  $journal['subFamily'],
                                'family' =>  $journal['family'],);
             
        }

        return $stockTotal;
            
    }

    /**
     * @return array
     */
    public function getAllStockFromJournalByArticle($id = 0)
    {   
        if ($id != 0){
            return  $this->em->getRepository(Journal::class)
                            ->getAllStockByIdArticle($id);
            
        }
        return  $this->em->getRepository(Journal::class)
                            ->getAllStockByArticle();
        
    }

    /**
     * @param int $id
     * @return array
     */
    public function getReturnQuantityByArticle($id)
    {   
        return  $this->em->getRepository(ReturnArticleToCentralStore::class)
                            ->getReturnByArticle($id)['quantity'];
    }

    /**
     * @param int $id
     * @return array
     */
    public function getDischargeQuantityByArticle($id)
    {   
        return  $this->em->getRepository(DischargeArticle::class)
                            ->getDischargeByArticle($id)['quantity'];
    }

    /**
     * @return array
     */
    public function getAllStockByArticle(){

        $stockTotal = array();
        foreach ($this->getAllStockFromJournalByArticle() as $journal) {

            $qteDischarge = is_null($this->getDischargeQuantityByArticle($journal['article_id'])) ? 0 : $this->getDischargeQuantityByArticle($journal['article_id']);
            
            $qteRetour = is_null($this->getReturnQuantityByArticle($journal['article_id'])) ? 0 : $this->getReturnQuantityByArticle($journal['article_id']);
            
            $qte = abs($journal['quantity'] + ($qteRetour - $qteDischarge));
            
            $stockTotal[]=array('quantity'=>  $qte ,
                                'price'=>  $journal['price'],
                                'article' => $journal['article'],
                                'unit' => $journal['unit'],
                                'subFamily' =>  $journal['subFamily'],
                                'family' =>  $journal['family'],);
             
        }

        return $stockTotal;
            
    }

    /**
     * @param int $id
     * @return array
     */
    public function getAllMagazineDischarge($id){
        
        return $this->em->getRepository(Magazine::class)
                        ->getStock($id);
    }

    
    /**
     * @param int $id
     * @return int
     */
    public function getStockById($id){

        $qteDischarge = intval($this->getDischargeQuantityBySupportingDocument($id));
            
        $qteRetour = intval($this->getReturnQuantityBySupportingDocument($id));

        $qteJournalStock = intval($this->em->getRepository(journal::class)
                                            ->getStockBySupportingDocument($id)['quantity']);
           
        return abs(($qteJournalStock + $qteRetour ) - $qteDischarge);
    }

    /**
     * @param int $id
     * @return int
     */
    public function getStockByArticleId($id){

        $stockTotal = array();
        foreach ($this->getAllStockFromJournalByArticle($id) as $journal) {

            $qteDischarge = intval($this->getDischargeQuantityBySupportingDocument($journal['sd_id']));
            
            $qteRetour = intval($this->getReturnQuantityBySupportingDocument($journal['sd_id']));

            $qte = abs(($journal['quantity'] + $qteRetour) - $qteDischarge);
            if ($qte > 0)
            $stockTotal[]=array('text' => $journal['inventoryNumber'],
                                'id' => $journal['sd_id'],
                                'article_id' => $journal['article_id'],
                                'quantity'=>  $qte ,
                                'price'=>  $journal['price'],
                                'article' => $journal['article'],
                                'unit' => $journal['unit'],
                                'subFamily' =>  $journal['subFamily'],
                                'family' =>  $journal['family'],);
             
        }

        return $stockTotal;
    }

    /**
     * @return array
     */
    public function getSubStoreAllStockFromJournalByArticle($store_id , $id = 0)
    {   
        if ($id != 0){
            return  $this->em->getRepository(DischargeArticleToMagazine::class)
                            ->getStoreArticleBySupportingDoc($store_id , $id)['quantity'];
            
        }
        return  $this->em->getRepository(DischargeArticleToMagazine::class)
                            ->getStoreArticleBy($store_id);
        
    }

    /**
     * @param int $id
     * @return array
     */
    public function getSubStoreReturnQuantityByArticle($store_id , $id)
    {   
        return  $this->em->getRepository(ReturnArticleToSubStore::class)
                            ->getReturnByArticle($id,$store_id)['quantity'];
    }

    /**
     * @param int $id
     * @return array
     */
    public function getSubStoreDischargeQuantityByArticle($store_id , $id)
    {   
        return  $this->em->getRepository(MagazineDischarge::class)
                            ->getDischargeByArticle($id,$store_id)['quantity'];
    }


    /**
     * @param int $id
     * @return array
     */
    public function getSubStoreReturnQuantityBySupportingDocument($store_id , $id)
    {   
        return  $this->em->getRepository(ReturnArticleToSubStore::class)
                            ->getReturnById($id,$store_id)['quantity'];
    }

    /**
     * @param int $id
     * @return array
     */
    public function getSubStoreDischargeQuantityBySupportingDocument($store_id , $id)
    {   
        return  $this->em->getRepository(MagazineDischarge::class)
                            ->getDischargeById($id,$store_id)['quantity'];
    }

    /**
     * @param int $id
     * @return int
     */
    public function getSubStoreStockByArticleId($id, $article_id){

        $stockTotal = array();
        foreach ($this->em->getRepository(DischargeArticleToMagazine::class)->getStoreArticleByArticleId($id , $article_id) as $journal) {

            $qteDischarge = intval($this->getSubStoreDischargeQuantityBySupportingDocument($journal['sd_id'],$id));
            
            $qteRetour = intval($this->getSubStoreReturnQuantityBySupportingDocument($journal['sd_id'],$id));

            $qte = abs(($journal['quantity'] + $qteRetour) - $qteDischarge);
            if ($qte > 0)
            $stockTotal[]=array('text' => $journal['inventoryNumber'],
                                'id' => $journal['sd_id'],
                                'article_id' => $journal['article_id'],
                                'quantity'=>  $qte ,
                                'price'=>  $journal['price'],
                                'article' => $journal['article'],
                                );
             
        }

        return $stockTotal;
    }

    /**
     * @param int $id
     * @return int
     */
    public function getSubStoreStockById($store_id , $id){

        $qteDischarge = intval($this->getSubStoreDischargeQuantityBySupportingDocument($store_id , $id));
            
        $qteRetour = intval($this->getSubStoreReturnQuantityBySupportingDocument($store_id , $id));

        $qteJournalStock = intval($this->getSubStoreAllStockFromJournalByArticle($store_id , $id));
           
        return  abs(($qteJournalStock + $qteRetour ) - $qteDischarge);
    }

}