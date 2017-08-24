<?php

namespace ISETSO\MagazineBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ISETSO\MagazineBundle\Model\Security;

/**
 * ArticleManagement
 *
 * @ORM\MappedSuperclass
 */

class ArticleManagement extends Security
{

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="text")
     * @Assert\NotBlank()
     */
    protected $observation;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", nullable=true, length=50)
     * 
     */
    protected $etat;

    /**
     * @var \date
     * @ORM\Column(name="dateEntre", type="date")
     * 
     */
    protected $date;

    /**
     * @ORM\ManyToOne(targetEntity="ISETSO\UserBundle\Entity\User\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set observation
     *
     * @param string $observation
     *
     * @return DischargeArticle
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;

        return $this;
    }

    /**
     * Get observation
     *
     * @return string
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return DischargeArticle
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return DischargeArticle
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
     * Get detail
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Set user
     *
     * @param \ISETSO\UserBundle\Entity\User\User $user
     *
     * @return DischargeArticle
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
