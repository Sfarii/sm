<?php

namespace ISETSO\MagazineBundle\Entity\Family;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use ISETSO\MagazineBundle\Model\Security;

/**
 * Subfamily
 *
 * @ORM\Table(name="subfamily")
 * @ORM\Entity(repositoryClass="ISETSO\MagazineBundle\Repository\Family\subfamilyRepository")
 * @UniqueEntity("designation")
 */
class SubFamily extends Security
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
     * @ORM\OneToMany(targetEntity="ISETSO\MagazineBundle\Entity\Article\Article", mappedBy="subFamily" ,fetch="EXTRA_LAZY")
     */
    private $articles;

    /**
     * @ORM\ManyToOne(targetEntity="Family", inversedBy="subfamily")
     * @ORM\JoinColumn(name="local_id", referencedColumnName="id")
     * 
     */
    private $family;

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
        $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return SubFamily
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
     * Add article
     *
     * @param \ISETSO\MagazineBundle\Entity\Article\Article $article
     *
     * @return SubFamily
     */
    public function addArticle(\ISETSO\MagazineBundle\Entity\Article\Article $article)
    {
        $this->articles[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \ISETSO\MagazineBundle\Entity\Article\Article $article
     */
    public function removeArticle(\ISETSO\MagazineBundle\Entity\Article\Article $article)
    {
        $this->articles->removeElement($article);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Set family
     *
     * @param \ISETSO\MagazineBundle\Entity\Family\Family $family
     *
     * @return SubFamily
     */
    public function setFamily(\ISETSO\MagazineBundle\Entity\Family\Family $family = null)
    {
        $this->family = $family;

        return $this;
    }

    /**
     * Get family
     *
     * @return \ISETSO\MagazineBundle\Entity\Family\Family
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * Set user
     *
     * @param \ISETSO\UserBundle\Entity\User\User $user
     *
     * @return SubFamily
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
