<?php

namespace ISETSO\UserBundle\Services;

use ISETSO\UserBundle\Entity\User\UserHistory;
use ISETSO\UserBundle\Entity\User\User;

/**
 * @author Rami Sfari <rami2sfari@gmail.com>
 * @copyright Copyright (c) 2016, PFE
 */
class UserHistoryManager
{
    const ACTION_NEW = 'action.new';
    const ACTION_EDIT = 'action.update';
    const ACTION_DELETE = 'action.delete';
    const ACTION_LOCK = 'action.lock';
    const ACTION_EXPIRE = 'action.expire';
    const ACTION_CHECK = 'action.check';

    /**
     * @var EntityManager
     */
    private $_em;

    /**
    * @param Doctrine\ORM\EntityManager $em
    */
	public function __construct($em)
    {
        $this->em = $em;
    }

    /** 
     * Cette methode permet de creé historique de l'utilisateur
     *
     * @param string $role
     * @param User $creator
     * @param string $message
     * @param string $link
     *
     * @return void
     */
    public function insertAddUserHistory($role,User $creator,$message)
    {
        $userHistory = new UserHistory();
        $userHistory->setAction(self::ACTION_NEW)
                        ->setMessage($message)
                        ->setRole($role)
                        ->setAuthor($creator)
        ;

        $this->em->persist($userHistory);
        $this->em->flush();
    }

    /** 
     * Cette methode permet de creé modification historique de l'utilisateur
     *
     * @param string $role
     * @param User $creator
     * @param string $message
     * @param string $link
     *
     * @return void
     */
    public function insertEditUserHistory($role,User $creator,$message, $link = null)
    {
        $userHistory = new UserHistory();
        $userHistory->setAction(self::ACTION_EDIT)
                        ->setMessage($message)
                        ->setRole($role)
                        ->setAuthor($creator)
        ;

        $this->em->persist($userHistory);
        $this->em->flush();
    }

    /** 
     * Cette methode permet de creé supprition historique de l'utilisateur
     *
     * @param string $role
     * @param User $creator
     * @param string $message
     *
     * @return void
     */
    public function insertDeleteUserHistory($role,User $creator,$message)
    {
        $userHistory = new UserHistory();
        $userHistory->setAction(self::ACTION_DELETE)
                        ->setMessage($message)
                        ->setRole($role)
                        ->setAuthor($creator)
        ;

        $this->em->persist($userHistory);
        $this->em->flush();
    }

    public function insertCheckUserHistory($role,User $creator,$message)
    {
        $userHistory = new UserHistory();
        $userHistory->setAction(self::ACTION_CHECK)
                        ->setMessage($message)
                        ->setRole($role)
                        ->setAuthor($creator)
        ;

        $this->em->persist($userHistory);
        $this->em->flush();
    }

    /** 
     * Cette methode permet de creé supprition historique de l'utilisateur
     *
     * @param string $role
     * @param User $creator
     * @param string $message
     *
     * @return void
     */
    public function insertLockUserHistory($role,User $creator,$message)
    {
        $userHistory = new UserHistory();
        $userHistory->setAction(self::ACTION_LOCK)
                        ->setMessage($message)
                        ->setRole($role)
                        ->setAuthor($creator)
        ;

        $this->em->persist($userHistory);
        $this->em->flush();
    }

    /** 
     * Cette methode permet de creé supprition historique de l'utilisateur
     *
     * @param string $role
     * @param User $creator
     * @param string $message
     *
     * @return void
     */
    public function insertExpireUserHistory($role,User $creator,$message)
    {
        $userHistory = new UserHistory();
        $userHistory->setAction(self::ACTION_EXPIRE)
                        ->setMessage($message)
                        ->setRole($role)
                        ->setAuthor($creator)
        ;

        $this->em->persist($userHistory);
        $this->em->flush();
    }

}