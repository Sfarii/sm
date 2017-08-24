<?php

namespace ISETSO\MagazineBundle\Entity\ArticleManagement;

use ISETSO\MagazineBundle\Model\ArticleManagement;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * OrderArticle
 *
 * @ORM\Table(name="order_article")
 * @ORM\Entity(repositoryClass="ISETSO\MagazineBundle\Repository\ArticleManagement\OrderArticleRepository")
 */
class OrderArticle extends ArticleManagement
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
     * @ORM\ManyToMany(targetEntity="ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailOrderArticle")
     * @ORM\JoinColumn(name="DetailOrderArticle_id", referencedColumnName="id")
     * 
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
     * @param \ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailOrderArticle $detail
     *
     * @return OrderArticle
     */
    public function addDetail(\ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailOrderArticle $detail)
    {
        $this->detail[] = $detail;

        return $this;
    }

    /**
     * Remove detail
     *
     * @param \ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailOrderArticle $detail
     */
    public function removeDetail(\ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailOrderArticle $detail)
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
