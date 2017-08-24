<?php

namespace ISETSO\MagazineBundle\Entity\ArticleManagement;

use ISETSO\MagazineBundle\Model\ArticleManagement;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * DischargeArticle
 *
 * @ORM\Entity(repositoryClass="ISETSO\MagazineBundle\Repository\ArticleManagement\DischargeArticleRepository")
 * @ORM\InheritanceType("JOINED")
 */
class DischargeArticle extends ArticleManagement
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
     * @ORM\ManyToMany(targetEntity="ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailDischargeArticle")
     * @ORM\JoinColumn(name="detailDischargeArticle_id", referencedColumnName="id")
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
     * @param \ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailDischargeArticle $detail
     *
     * @return DischargeArticle
     */
    public function addDetail(\ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailDischargeArticle $detail)
    {
        $this->detail[] = $detail;

        return $this;
    }

    /**
     * Remove detail
     *
     * @param \ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailDischargeArticle $detail
     */
    public function removeDetail(\ISETSO\MagazineBundle\Entity\DetailArticleManagement\DetailDischargeArticle $detail)
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
