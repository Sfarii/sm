<?php

namespace ISETSO\UserBundle\Entity\User;

use FOS\UserBundle\Entity\Group as BaseGroup;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="ISETSO\UserBundle\Repository\Group\UserGroupRepository")
 * @ORM\Table(name="user_group")
 * @UniqueEntity("name")
 */
class UserGroup extends BaseGroup
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var array
     *
     * @ORM\Column(name="permission", type="array")
     */
    private $permission;

    /**
     * @ORM\ManyToMany(targetEntity="user", mappedBy="groups")
     */
    private $users;

    public function removeRole($role)
    {
        if (false !== $key = array_search(strtoupper($role), $this->roles, true)) {
            unset($this->roles[$key]);
            $this->roles = array_values($this->roles);
        }

        $permission = array();
        foreach ($this->permission as $roles) {
            foreach ($roles as $key => $value) {
                if ($role != $key){
                    $permission[] = array($key => $value);
                }
            }
            
        }
        $this->permission = $permission;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

     /**
     * @param string $role
     *
     * @return Group
     */
    public function addRole($role)
    {
        if (!$this->hasRole($role)) {
            $this->roles[] = strtoupper($role);
            $this->permission[] = array($role => array(User::$view));
        }

        return $this;
    }

    public function getRolePermission($role)
    {
        foreach ($this->permission as $roles) {
            foreach ($roles as $key => $value) {
                if ($role == $key){
                    return $value;
                }
            }
            
        }
        return array();
    }

    /**
     * Set permission
     *
     * @param array $permission
     *
     * @return User
     */
    public function setPermission($permissions)
    {
        $this->permission = $permissions;
        return $this;
    }

    /**
     * Get permission
     *
     * @return array
     */
    public function getPermission()
    {
        return $this->permission;
    }

    

    /**
     * Set user
     *
     * @param \ISETSO\UserBundle\Entity\User\User $user
     *
     * @return UserGroup
     */
    public function setUser(\ISETSO\UserBundle\Entity\User\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \ISETSO\UserBundle\Entity\User\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add user
     *
     * @param \ISETSO\UserBundle\Entity\User\user $user
     *
     * @return UserGroup
     */
    public function addUser(\ISETSO\UserBundle\Entity\User\user $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \ISETSO\UserBundle\Entity\User\user $user
     */
    public function removeUser(\ISETSO\UserBundle\Entity\User\user $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
}
