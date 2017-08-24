<?php

namespace ISETSO\MagazineBundle\Entity\Family;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use ISETSO\MagazineBundle\Model\Security;

/**
 * Family
 *
 * @ORM\InheritanceType("JOINED")
 * @ORM\Entity
 * @UniqueEntity("designation")
 */
class Family extends Security
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
     * @ORM\ManyToOne(targetEntity="ISETSO\UserBundle\Entity\User\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     * @Assert\NotBlank()
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="SubFamily", mappedBy="family",fetch="EXTRA_LAZY" )
     */
    private $subfamily;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subfamily = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Family
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
     * Set description
     *
     * @param string $description
     *
     * @return Family
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set user
     *
     * @param \ISETSO\UserBundle\Entity\User\User $user
     *
     * @return Family
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
     * Add subfamily
     *
     * @param \ISETSO\MagazineBundle\Entity\Family\SubFamily $subfamily
     *
     * @return Family
     */
    public function addSubfamily(\ISETSO\MagazineBundle\Entity\Family\SubFamily $subfamily)
    {
        $this->subfamily[] = $subfamily;

        return $this;
    }

    /**
     * Remove subfamily
     *
     * @param \ISETSO\MagazineBundle\Entity\Family\SubFamily $subfamily
     */
    public function removeSubfamily(\ISETSO\MagazineBundle\Entity\Family\SubFamily $subfamily)
    {
        $this->subfamily->removeElement($subfamily);
    }

    /**
     * Get subfamily
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubfamily()
    {
        return $this->subfamily;
    }
}
