<?php

namespace ISETSO\MagazineBundle\Repository\ArticleManagement;

/**
 * ReturnArticleToSubStoreRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ReturnArticleToSubStoreRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @return Query
     */
    public function findAllBy($magazine)
    {
        return $this->createQueryBuilder('f')
                    ->join('f.user', 'u')
                    ->join('f.toSubStore', 'm')
                    ->where('m.id = :id')
                    ->setParameter('id',$magazine->getId());
    }

    /**
     * @param \ISETSO\UserBundle\Entity\User\User $user
     * @return Query
     */
    public function findByUserAndBy($magazine,$user)
    {
        return $this->createQueryBuilder('f')
                        ->join('f.user', 'u')
                        ->join('f.toSubStore', 'm')
                        ->where('u.id = :id')
                        ->setParameter('id',$user->getId())
                        ->andWhere('m.id = :id')
                        ->setParameter('id',$magazine->getId());
    }

	/**
    * @param int $id
    * @param int $store_id
    * @return array
    */
    public function getReturnById($id,$store_id)
    {
        return $this->createQueryBuilder('n')
                        ->select('sum(s.quantity) as quantity')

                        ->join('n.detail' , 's')
                        ->join('s.supportingDocument' , 'a')
                        ->join('n.toSubStore' , 'store')

                        ->groupBy('s.supportingDocument')
                        ->where('n.etat = :etat')
                        ->setParameter('etat', "a")

                        ->andWhere('a.id = :id')
                        ->setParameter('id', $id)
                        
                        ->andWhere('store.id = :store_id')
                        ->setParameter('store_id', $store_id)

                        ->getQuery()
                        ->getOneOrNullResult()
                        ;
    }

    /**
    * @param int $id
    * @param int $store_id
    * @return array
    */
    public function getReturnByArticle($id,$store_id)
    {
        return $this->createQueryBuilder('n')
                        ->select('sum(s.quantity) as quantity')
                        ->join('n.detail' , 's')
                        ->join('s.supportingDocument' , 'a')
                        ->join('a.article' , 'ar')
                        ->join('n.toSubStore' , 'store')
                        
                        ->groupBy('a.article')
                        ->where('n.etat = :etat')
                        ->setParameter('etat', "a")

                        ->andWhere('ar.id = :id')
                        ->setParameter('id', $id)

                        ->andWhere('store.id = :store_id')
                        ->setParameter('store_id', $store_id)

                        ->getQuery()
                        ->getOneOrNullResult()
                        ;
    }

	/**
     * @return Query
     */
    public function findAll()
    {
        return $this->createQueryBuilder('f')
                    ->join('f.user', 'u');
    }

    /**
     * @param \ISETSO\UserBundle\Entity\User\User $user
     * @return Query
     */
    public function findByUser($user)
    {
        return $this->createQueryBuilder('j')
                        ->join('j.user', 'u')
                        ->where('u.id = :id')
                        ->setParameter('id',$user->getId())
                        ->select('s.price ,sum(s.quantity) as quantity , a.designation as article , sf.designation as subFamily , fa.designation as family , u.designation as unit')
                        ->join('j.supportingDocument' , 's')
                        ->join('s.article' , 'a')
                        ->join('a.subFamily','sf')
                        ->join('sf.family','fa')
                        ->join('a.unit','u')
                        ->groupBy('s.article')
                        ->getQuery()
                        ->getResult()
                        ;
    }

    /**
     * @param String $field
     * @param \ISETSO\UserBundle\Entity\User\User $user
     * @return Query
     */
    public function findByAnything($query , $field)
    {
        return  $query->andWhere('f.id like :search OR f.etat LIKE :search OR f.date LIKE :search OR f.observation LIKE :search OR u.username LIKE :search')
                    ->setParameter('search', '%'.$field.'%')
                    ->orderBy('f.id', 'ASC');
    }

    /**
     * @param date $startDate
     * @param date $endDate
     * @param Query $query
     * @return Query
     */
    public function findBetween($query , $startDate , $endDate)
    {
        return  $query->andWhere('f.dateEntre BETWEEN :startDate AND :endDate')
                        ->setParameter('startDate', $startDate)
                        ->setParameter('endDate', $endDate)
                        ->orderBy('f.id', 'DESC');
    }
}
