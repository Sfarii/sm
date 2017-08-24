<?php

namespace ISETSO\MagazineBundle\Entity\ArticleManagement;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ISETSO\MagazineBundle\Model\ArticleManagement;

/**
 * ReturnArticle
 *
 * @ORM\Entity(repositoryClass="ISETSO\MagazineBundle\Repository\ArticleManagement\ReturnArticleRepository")
 * @ORM\InheritanceType("JOINED")
 */
class ReturnArticle extends ArticleManagement
{
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", nullable=true, length=50)
     * 
     */
    protected $etat;

    /**
     * @ORM\ManyToMany(targetEntity="ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailReturnArticle")
     * @ORM\JoinColumn(name="detailReturnArticle_id", referencedColumnName="id")
     * @Assert\NotBlank()
     */
    protected $detail;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->detail = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add detail
     *
     * @param \ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailReturnArticle $detail
     *
     * @return ReturnArticle
     */
    public function addDetail(\ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailReturnArticle $detail)
    {
        $this->detail[] = $detail;

        return $this;
    }

    /**
     * Remove detail
     *
     * @param \ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailReturnArticle $detail
     */
    public function removeDetail(\ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailReturnArticle $detail)
    {
        $this->detail->removeElement($detail);
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
}
