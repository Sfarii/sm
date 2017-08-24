<?php

namespace ISETSO\MagazineBundle\Model;

use ISETSO\UserBundle\Entity\User\User;

class Security
{
	
	/**
    * Is the given User the author of this Post?
    *
    * @return bool
    */
    public function isAuthor(User $user = null)
    {
        return $user && $user->getUsername() == $this->getUser()->getUsername();
    }
}