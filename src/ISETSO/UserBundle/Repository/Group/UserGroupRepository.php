<?php

namespace ISETSO\UserBundle\Repository\Group;

/**
 * User Repository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserGroupRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @return Query
     */
    public function findAll()
    {
        return $this->createQueryBuilder('f');
    }

    /**
     * @param \ISETSO\UserBundle\Entity\User\User $user
     * @return Query
     */
    public function findByUser($user)
    {
        return $this->createQueryBuilder('f')
                        ->join('f.user', 'u')
                        ->where('u.id = :id')
                        ->setParameter('id',$user->getId());
    }

    /**
     * @param String $field
     * @param \ISETSO\UserBundle\Entity\User\User $user
     * @return Query
     */
    public function findByAnything($query , $field)
    {
        return  $query->andWhere('f.id like :search OR f.name OR u.username LIKE :search')
                    ->setParameter('search', '%'.$field.'%')
                    ->orderBy('f.id', 'ASC');
    }
}
