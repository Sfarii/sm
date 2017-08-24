<?php

namespace ISETSO\UserBundle\Entity\User;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\DateTimeType;

/**
 * UserHistory
 *
 * @ORM\Table(name="user_history")
 * @ORM\Entity(repositoryClass="ISETSO\UserBundle\Repository\User\UserHistoryRepository")
 * @ORM\Cache(usage="READ_ONLY" , region="my_user_history")
 */
class UserHistory
{
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=100)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=100)
     */
    private $role;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     */
    private $author;

    public function __construct() {
        $this->date = new \DateTime("now");
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return UserHistory
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set action
     *
     * @param string $action
     *
     * @return UserHistory
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return UserHistory
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return UserHistory
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    

    /**
     * Set author
     *
     * @param \ISETSO\UserBundle\Entity\User\User $author
     *
     * @return UserHistory
     */
    public function setAuthor(\ISETSO\UserBundle\Entity\User\User $author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \ISETSO\UserBundle\Entity\User\User
     */
    public function getAuthor()
    {
        return $this->author;
    }
}
