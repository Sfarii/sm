<?php

namespace ISETSO\MagazineBundle\Repository\ArticleManagement;

/**
 * DischargeArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DischargeArticleRepository extends \Doctrine\ORM\EntityRepository
{

    /**
    * @param int $id
    * @return array
    */
    public function getDischargeById($id)
    {
        return $this->createQueryBuilder('n')
                        ->select('sum(s.quantity) as quantity')
                        ->join('n.detail' , 's')
                        ->join('s.supportingDocument' , 'a')
                        ->groupBy('a.id')
                        ->where('n.etat = :etat')
                        ->setParameter('etat', "a")
                        ->andWhere('a.id = :id')
                        ->setParameter('id', $id)
                        ->getQuery()
                        ->getOneOrNullResult()
                        ;
    }

    /**
    * @param int $id
    * @return array
    */
    public function getDischargeByArticle($id)
    {
        return $this->createQueryBuilder('n')
                        ->select('sum(s.quantity) as quantity')
                        ->join('n.detail' , 's')
                        ->join('s.supportingDocument' , 'a')
                        ->innerJoin('a.article' , 'ar')
                        ->groupBy('a.article')
                        ->where('n.etat = :etat')
                        ->setParameter('etat', "a")
                        ->andWhere('ar.id = :id')
                        ->setParameter('id', $id)
                        ->getQuery()
                        ->getOneOrNullResult()
                        ;
    }

    /**
     * @return array
     */
    public function getStockFromDischarge()
    {
        return $this->createQueryBuilder('r')
                        ->select('sum(d.quantity) as quantity , a.id as article_id , a.designation as article_name , u.designation as unit ')
                        ->innerJoin('r.detail' , 'd' )
                        ->innerJoin('d.article' , 'a')
                        ->join('a.unit' , 'u')
                        ->where('r.etat = :etat')
                        ->setParameter('etat', "a")
                        ->andWhere('r.etat = :etat')
                        ->setParameter('etat', "a")
                        ->groupBy('d.article')
                        ->getQuery()
                        ->getResult()
                        ;
    }

	/**
     * @return int
     */
    public function getTotalDischargeNumber()
    {
        return  $this->createQueryBuilder('f')
                        ->select('count(f) as TotalDischargeNumber')
                        ->where('f.etat = :etat')
                        ->setParameter('etat', "magazine.etatOption.accept")
                        ->getQuery()
                        ->getResult()[0]['TotalDischargeNumber']
                        ;
        
    }

    /**
     * @return int
     */
    public function getNewDischargeNumber()
    {
        return  $this->createQueryBuilder('f')
                        ->select('count(f) as NewDischargeNumber')
                        ->where('f.etat <> :etat')
                        ->setParameter('etat', "magazine.etatOption.accept")
                        ->getQuery()
                        ->getResult()[0]['NewDischargeNumber'];
    }
}
