<?php

namespace ISETSO\MagazineBundle\Entity\Local;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use ISETSO\MagazineBundle\Model\Security;

/**
 * Local
 *
 * @ORM\Table(name="local")
 * @ORM\Entity(repositoryClass="ISETSO\MagazineBundle\Repository\Local\LocalRepository")
 * @UniqueEntity("designation")
 */
class Local extends Security
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
     * @ORM\ManyToOne(targetEntity="TypeLocal", inversedBy="locals")
     * @ORM\JoinColumn(name="local_id", referencedColumnName="id")
     * @Assert\NotBlank()
     */
    private $typeLocal;

    /**
     * @ORM\OneToMany(targetEntity="ISETSO\MagazineBundle\Entity\ArticleManagement\DischargeArticleToLocal", mappedBy="toLocal" ,fetch="EXTRA_LAZY" )
     */
    private $dischargeArticle;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dischargeArticle = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Local
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
     * @return Local
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
     * Set typeLocal
     *
     * @param \ISETSO\MagazineBundle\Entity\Local\TypeLocal $typeLocal
     *
     * @return Local
     */
    public function setTypeLocal(\ISETSO\MagazineBundle\Entity\Local\TypeLocal $typeLocal = null)
    {
        $this->typeLocal = $typeLocal;

        return $this;
    }

    /**
     * Get typeLocal
     *
     * @return \ISETSO\MagazineBundle\Entity\Local\TypeLocal
     */
    public function getTypeLocal()
    {
        return $this->typeLocal;
    }

    /**
     * Add dischargearticle
     *
     * @param \ISETSO\MagazineBundle\Entity\ArticleMAnagemeNt\dischargeArticleToLocal $dischargearticle
     *
     * @return Local
     */
    public function addDischargeArticle(\ISETSO\MagazineBundle\Entity\ArticleMAnagemeNt\dischargeArticleToLocal $dischargearticle)
    {
        $this->dischargeArticle[] = $dischargearticle;

        return $this;
    }

    /**
     * Remove dischargearticle
     *
     * @param \ISETSO\MagazineBundle\Entity\ArticleMAnagemeNt\dischargeArticleToLocal $dischargearticle
     */
    public function removeDischargeArticle(\ISETSO\MagazineBundle\Entity\ArticleMAnagemeNt\dischargeArticleToLocal $dischargearticle)
    {
        $this->dischargeArticle->removeElement($dischargearticle);
    }

    /**
     * Get dischargedischargearticle
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDischargeArticle()
    {
        return $this->dischargeArticle;
    }
}
