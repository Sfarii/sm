<?php

namespace ISETSO\UserBundle\Entity\User;

use FOS\UserBundle\Entity\User as BaseUser;
use ISETSO\UserBundle\Services\UserEntityManager;
use Doctrine\ORM\Mapping as ORM;
use FOS\MessageBundle\Model\ParticipantInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * @ORM\Entity(repositoryClass="ISETSO\UserBundle\Repository\User\UserRepository")
 * @ORM\Table(name="user")
 * @UniqueEntity("phone")
 */
class User extends BaseUser implements ParticipantInterface
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var int
     *
     * @ORM\Column(name="phone", type="integer",  unique=true , nullable=true)
     */
    private $phone;

    /**
     * @var array
     *
     * @ORM\Column(name="permissions", type="array")
     */
    private $permissions;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255 , nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255 , nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="function_name", type="string", length=255 , nullable=true)
     */
    private $function;

    /**
     * @ORM\ManyToMany(targetEntity="ISETSO\MagazineBundle\Entity\Magazine\Magazine", mappedBy="inCharge" ,fetch="EXTRA_LAZY")
     */
    private $magazines;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    public function __construct()
    {
        parent::__construct();
        $this->groups = new ArrayCollection();
        $this->permissions = array();
    }


    /**
     * @ORM\ManyToMany(targetEntity="UserGroup",inversedBy="users")
     * @ORM\JoinTable(name="user_usergroup",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     *
     */
    protected $groups;

   

    /**
     * Set phone
     *
     * @param integer $phone
     *
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return integer
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    public function addRole($role)
    {
        $role = strtoupper($role);
        if ($role === static::ROLE_DEFAULT) {
            return $this;
        }
        if ($role === static::ROLE_SUPER_ADMIN){
            $this->roles[] = $role;
        }

        if (!in_array($role, $this->roles, true)) {
            $this->roles[] = $role;
            $this->permissions[] = array($role => array(UserEntityManager::VIEW));
            
        }

        return $this;
    }

    public function removeRole($role)
    {
        if ( $role === static::ROLE_SUPER_ADMIN) {
            return $this;
        }else 
        if (false !== $key = array_search(strtoupper($role), $this->roles, true)) {
            unset($this->roles[$key]);
            $this->roles = array_values($this->roles);
        
            $permission = array();
            foreach ($this->permissions as $roles) {
                foreach ($roles as $key => $value) {
                    if ($role != $key){
                        $permission[] = array($key => $value);
                    }
                }
                
            }
            $this->permissions = $permission;
        }
        
        return $this;
    }

    public function getUserRoles()
    {
        if (is_null($this->groups) || $this->groups->isEmpty()){
            return $this->roles;
        }
        
        $userRole  = array();
        foreach ($this->roles as $role) {
            foreach ($this->getGroups() as $group) {
                if (!in_array($role, $group->getRoles(), true)){
                    $userRole[] = $role;
                }
            }
        }
        return $userRole;
    
    }

    /**
     * Set function
     *
     * @param string $function
     *
     * @return User
     */
    public function setFunction($function)
    {
        $this->function = $function;

        return $this;
    }

    /**
     * Get function
     *
     * @return string
     */
    public function getFunction()
    {
        return $this->function;
    }

    public function getRolePermission($role)
    {
        foreach ($this->permissions as $roles) {
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
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
        return $this;
    }

    /**
     * Get permission
     *
     * @return array
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    public function getAllPermissions()
    {
        $permissionsArray = $this->permissions;
        foreach ($this->getGroups() as $group) {
            $permissionsArray = array_merge($permissionsArray, $group->getPermission());
        }
        return $permissionsArray;
    }

    /**
     * 
     * @param string $role
     *
     * @return boolean
     */
    public function hasPermissions($role , $permissions)
    {
        foreach ($this->getAllPermissions() as $roles) {
            foreach ($roles as $key => $value) {
                if ($role == $key && in_array($permissions, $value)){
                    return true;
                }
            }
            
        }
        return false;
    }

    /**
     * @return Bool 
     */
    public function isActiveNow()
    {
        $delay = new \DateTime('2 minutes ago');

        return ( $this->getLastLogin() > $delay );
    }

    /**
     * @return \DateTime
     */
    public function getExpiresAt(){
        return $this->expiresAt;
    }

    /**
     * @return Bool 
     */
    public function isExpiredAt(){
        if (!is_null($this->expiresAt) && $this->expiresAt->getTimestamp() < time()) {
            return true;
        }

        return false;
    }

    /**
     * Add magazine
     *
     * @param \ISETSO\MagazineBundle\Entity\Magazine\Magazine $magazine
     *
     * @return User
     */
    public function addMagazine(\ISETSO\MagazineBundle\Entity\Magazine\Magazine $magazine)
    {
        $this->magazines[] = $magazine;

        return $this;
    }

    /**
     * Remove magazine
     *
     * @param \ISETSO\MagazineBundle\Entity\Magazine\Magazine $magazine
     */
    public function removeMagazine(\ISETSO\MagazineBundle\Entity\Magazine\Magazine $magazine)
    {
        $this->magazines->removeElement($magazine);
    }

    /**
     * Get magazines
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMagazines()
    {
        return $this->magazines;
    }

    /**
     * Set user
     *
     * @param \ISETSO\UserBundle\Entity\User\User $user
     *
     * @return User
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
}
