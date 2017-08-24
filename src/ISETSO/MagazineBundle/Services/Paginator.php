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
class Paginator
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
     * Creates Paginator.
     *
     * @param Query $query 
     * @param Symfony\Component\HttpFoundation\Request $request
     * @param int $nb_page  
     * @return Knp\Component\Pager\Paginator
     */
    public function createPaginator($query ,$request, $nb_page = 10)
    {

        return $this->paginator->paginate(
            $query/*requéte*/,
            $request->query->getInt('page', 1)/*page number*/,
            $nb_page /*limit pour page*/
        );
    }

      
}
?>