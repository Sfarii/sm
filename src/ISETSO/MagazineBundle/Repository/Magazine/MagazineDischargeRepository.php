<?php

namespace ISETSO\MagazineBundle\Repository\Magazine;

/**
 * MagazineDischargeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MagazineDischargeRepository extends \Doctrine\ORM\EntityRepository
{

    /**
     * @param \ISETSO\UserBundle\Entity\User\User $user
     * @param int $inventoryNumber
     * @return Query
     */
    public function findDischargeByUserAndSupportingDocAndSubStore($user,$id , $store)
    {
        return $this->createQueryBuilder('f')
                        ->select('sum(s.quantity) as quantity')

                        ->join('f.toUser', 'toU')
                        ->join('f.detail' , 'd' )
                        ->join('d.supportingDocument' , 's')
                        ->join('f.toSubStore', 'm')
                        
                        ->where('toU.id = :id')
                        ->setParameter('id',$user->getId())
                        
                        ->andWhere('f.etat = :etat')
                        ->setParameter('etat', "a")
                        
                        ->andWhere('s.id = :idSupp')
                        ->setParameter('idSupp', $id)

                        ->andWhere('m.id = :store_id')
                        ->setParameter('store_id',$store->getId())

                        ->groupBy('s.id')
                        ->orderBy('f.date', 'ASC')
                        ->getQuery()
                        ->getOneOrNullResult()
                        ;
    }

    /**
    * @param int $id
    * @param int $store_id
    * @return array
    */
    public function getDischargeById($id,$store_id)
    {
        return $this->createQueryBuilder('n')
                        ->select('sum(s.quantity) as quantity')

                        ->join('n.detail' , 's')
                        ->join('s.supportingDocument' , 'a')
                        ->join('n.toSubStore', 'm')
                        
                        ->groupBy('s.supportingDocument')

                        ->where('n.etat = :etat')
                        ->setParameter('etat', "a")

                        ->andWhere('a.id = :id')
                        ->setParameter('id', $id)
                        
                        ->andWhere('m.id = :store_id')
                        ->setParameter('store_id',$store_id)
                        ->getQuery()
                        ->getOneOrNullResult()
                        ;
    }

    /**
    * @param int $id
    * @param int $store_id
    * @return array
    */
    public function getDischargeByArticle($id,$store_id)
    {
        return $this->createQueryBuilder('n')
                        ->select('sum(s.quantity) as quantity')

                        ->join('n.detail' , 's')
                        ->join('s.supportingDocument' , 'a')
                        ->join('a.article' , 'ar')
                        ->join('n.toSubStore', 'm')

                        ->groupBy('a.article')

                        ->where('n.etat = :etat')
                        ->setParameter('etat', "a")

                        ->andWhere('ar.id = :id')
                        ->setParameter('id', $id)

                        ->andWhere('m.id = :store_id')
                        ->setParameter('store_id',$store_id)
                        ->getQuery()
                        ->getOneOrNullResult()
                        ;
    }

    /**
     * @param \ISETSO\UserBundle\Entity\User\User $user
     * @return Query
     */
    public function findDischargeByUser($user , $store)
    {
        return $this->createQueryBuilder('f')
                        ->join('f.toUser', 'u')
                        ->join('f.toSubStore', 'm')
                        ->where('u.id = :id')
                        ->setParameter('id',$user->getId())
                        ->andWhere('f.etat = :etat')
                        ->setParameter('etat', "a")
                        ->andWhere('m.id = :store_id')
                        ->setParameter('store_id',$store->getId())
                        ->orderBy('f.date', 'ASC')
                        ->join('f.detail' , 's')
                        ->join('s.supportingDocument' , 'a')
                        ->groupBy('s.id')
                        ->getQuery()
                        ->getResult()
                        ;
    }
    
	/**
     * @return Query
     */
    public function findAllBy($magazine)
    {
        return $this->createQueryBuilder('f')
                    ->join('f.toUser', 'fu')
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
                        ->join('f.toUser', 'fu')
                        ->join('f.user', 'u')
                        ->join('f.toSubStore', 'm')
                        ->where('u.id = :id')
                        ->setParameter('id',$user->getId())
                        ->andWhere('m.id = :id')
                        ->setParameter('id',$magazine->getId());
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
}
