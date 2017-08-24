<?php

namespace ISETSO\MagazineBundle\Entity\Article;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use ISETSO\MagazineBundle\Model\Security;

/**
 * Unit
 *
 * @ORM\Table(name="unit")
 * @ORM\Entity(repositoryClass="ISETSO\MagazineBundle\Repository\Article\UnitRepository")
 * @UniqueEntity("designation")
 */
class Unit extends Security
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
     * @ORM\OneToMany(targetEntity="Article", mappedBy="unit",fetch="EXTRA_LAZY" )
     */
    private $articles;

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
     * @return Unit
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
     * @return Unit
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
     * Set user
     *
     * @param \ISETSO\UserBundle\Entity\User\User $user
     *
     * @return Unit
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
