<?php

namespace ISETSO\MagazineBundle\Entity\Local;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use ISETSO\MagazineBundle\Model\Security;

/**
 * TypeLocal
 *
 * @ORM\Table(name="type_local")
 * @ORM\Entity(repositoryClass="ISETSO\MagazineBundle\Repository\Local\TypeLocalRepository")
 * @UniqueEntity("designation")
 */
class TypeLocal extends Security
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
     * @ORM\Column(name="designation", type="string", length=255,  unique=true)
     * @Assert\NotBlank()
     */
    private $designation;

    /**
     * @ORM\OneToMany(targetEntity="Local", mappedBy="typeLocal" ,fetch="EXTRA_LAZY")
     */
    private $locals;

    /**
     * @ORM\ManyToOne(targetEntity="ISETSO\UserBundle\Entity\User\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->locals = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set designation
     *
     * @param string $designation
     *
     * @return TypeLocal
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Add local
     *
     * @param \ISETSO\MagazineBundle\Entity\Local\Local $local
     *
     * @return TypeLocal
     */
    public function addLocal(\ISETSO\MagazineBundle\Entity\Local\Local $local)
    {
        $this->locals[] = $local;

        return $this;
    }

    /**
     * Remove local
     *
     * @param \ISETSO\MagazineBundle\Entity\Local\Local $local
     */
    public function removeLocal(\ISETSO\MagazineBundle\Entity\Local\Local $local)
    {
        $this->locals->removeElement($local);
    }

    /**
     * Get locals
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLocals()
    {
        return $this->locals;
    }

    /**
     * Set user
     *
     * @param \ISETSO\UserBundle\Entity\User\User $user
     *
     * @return TypeLocal
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
