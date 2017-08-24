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

/**
 * @author Rami Sfari <rami2sfari@gmail.com>
 * @copyright Copyright (c) 2016, PFE
 */
class StoreEntity extends Paginator
{

    /**
    * @param Doctrine\ORM\EntityManager $em
    * @param Knp\Component\Pager\Paginator $paginator
    * @param Symfony\Component\Form\Form $searchForm
    * @param Symfony\Component\Form\Form $formFactory
    */
    public function __construct($em ,$paginator, $checker, $journalManager)
    {
        parent::__construct();
    }

    /**
     * @param Repository $repository 
     * @param string $role 
     * @param User $user
     * @param string $searchField 
     * @return Query
     */
    public function getEntityBy($repository ,$user, $role , $form)
    {
        $query = null;

        if ($this->checker->isGranted('Manager',$role) && $user->isUser($user)){
            $query = $repository->findAll();
        }else 
        if ($this->checker->isGranted('View',$role) && $user->isUser($user)){
            $query = $repository->findByUser($user);
            
        }else{
            throw new AccessDeniedException('Access Denied', null);
        }

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

      
}
?>