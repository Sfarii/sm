<?php

namespace ISETSO\MagazineBundle\Entity\Magazine;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use ISETSO\MagazineBundle\Model\Security;

/**
 * Magazine
 *
 * @ORM\Table(name="magazine")
 * @ORM\Entity(repositoryClass="ISETSO\MagazineBundle\Repository\Magazine\MagazineRepository")
 * @UniqueEntity("designation")
 */
class Magazine extends Security
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
     * @ORM\Column(name="designation", type="string", length=255, unique=true)
     * @Assert\NotBlank()
     */
    private $designation;

    /**
     * @ORM\ManyToOne(targetEntity="ISETSO\UserBundle\Entity\User\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\ManyToMany(targetEntity="ISETSO\UserBundle\Entity\User\User", inversedBy="magazines")
     * @ORM\JoinTable(name="users_magzines")
     */
    private $inCharge;

    /**
     * @ORM\OneToMany(targetEntity="ISETSO\MagazineBundle\Entity\ArticleManagement\DischargeArticleToMagazine", mappedBy="toMagazine" ,fetch="EXTRA_LAZY" )
     */
    private $dischargeArticle;

     /**
     * @ORM\OneToMany(targetEntity="ISETSO\MagazineBundle\Entity\ArticleManagement\ReturnArticleToSubStore", mappedBy="toSubStore" ,fetch="EXTRA_LAZY" )
     */
    private $returnArticle;

    /**
     * @ORM\OneToMany(targetEntity="MagazineDischarge", mappedBy="toSubStore" )
     */
    private $dischargeMagazine;

    

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
     * Constructor
     */
    public function __construct()
    {
        $this->inCharge = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set designation
     *
     * @param string $designation
     *
     * @return Magazine
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
     * Set user
     *
     * @param \ISETSO\UserBundle\Entity\User\User $user
     *
     * @return Magazine
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
     * Add inCharge
     *
     * @param \ISETSO\UserBundle\Entity\User\User $inCharge
     *
     * @return Magazine
     */
    public function addInCharge(\ISETSO\UserBundle\Entity\User\User $inCharge)
    {
        $this->inCharge[] = $inCharge;

        return $this;
    }

    /**
     * Remove inCharge
     *
     * @param \ISETSO\UserBundle\Entity\User\User $inCharge
     */
    public function removeInCharge(\ISETSO\UserBundle\Entity\User\User $inCharge)
    {
        $this->inCharge->removeElement($inCharge);
    }

    /**
     * Get inCharge
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInCharge()
    {
        return $this->inCharge;
    }

    /**
     * Add dischargeArticle
     *
     * @param \ISETSO\MagazineBundle\Entity\ArticleManagement\DischargeArticleToMagazine $dischargeArticle
     *
     * @return Magazine
     */
    public function addDischargeArticle(\ISETSO\MagazineBundle\Entity\ArticleManagement\DischargeArticleToMagazine $dischargeArticle)
    {
        $this->dischargeArticle[] = $dischargeArticle;

        return $this;
    }

    /**
     * Remove dischargeArticle
     *
     * @param \ISETSO\MagazineBundle\Entity\ArticleManagement\DischargeArticleToMagazine $dischargeArticle
     */
    public function removeDischargeArticle(\ISETSO\MagazineBundle\Entity\ArticleManagement\DischargeArticleToMagazine $dischargeArticle)
    {
        $this->dischargeArticle->removeElement($dischargeArticle);
    }

    /**
     * Get dischargeArticle
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDischargeArticle()
    {
        return $this->dischargeArticle;
    }

    /**
     * Add dischargeMagazine
     *
     * @param \ISETSO\MagazineBundle\Entity\Magazine\MagazineDischarge $dischargeMagazine
     *
     * @return Magazine
     */
    public function addDischargeMagazine(\ISETSO\MagazineBundle\Entity\Magazine\MagazineDischarge $dischargeMagazine)
    {
        $this->dischargeMagazine[] = $dischargeMagazine;

        return $this;
    }

    /**
     * Remove dischargeMagazine
     *
     * @param \ISETSO\MagazineBundle\Entity\Magazine\MagazineDischarge $dischargeMagazine
     */
    public function removeDischargeMagazine(\ISETSO\MagazineBundle\Entity\Magazine\MagazineDischarge $dischargeMagazine)
    {
        $this->dischargeMagazine->removeElement($dischargeMagazine);
    }

    /**
     * Get dischargeMagazine
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDischargeMagazine()
    {
        return $this->dischargeMagazine;
    }
}
