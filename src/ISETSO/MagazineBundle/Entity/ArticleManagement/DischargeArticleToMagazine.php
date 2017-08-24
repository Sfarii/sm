<?php

namespace ISETSO\MagazineBundle\Entity\ArticleManagement;

use Doctrine\ORM\Mapping as ORM;

/**
 * DischargeArticleToMagazine
 *
 * @ORM\Table(name="discharge_article_to_magazine")
 * @ORM\Entity(repositoryClass="ISETSO\MagazineBundle\Repository\ArticleManagement\DischargeArticleToMagazineRepository")
 */
class DischargeArticleToMagazine extends DischargeArticle
{

    /**
     * @ORM\ManyToOne(targetEntity="ISETSO\MagazineBundle\Entity\magazine\Magazine" , inversedBy="dischargeArticle")
     * @ORM\JoinColumn(name="magazine_id", referencedColumnName="id")
     */
    private $toMagazine;

    /**
     * Set toMagazine
     *
     * @param \ISETSO\MagazineBundle\Entity\magazine\Magazine $toMagazine
     *
     * @return DischargeArticleToMagazine
     */
    public function setToMagazine(\ISETSO\MagazineBundle\Entity\magazine\Magazine $toMagazine = null)
    {
        $this->toMagazine = $toMagazine;

        return $this;
    }

    /**
     * Get toMagazine
     *
     * @return \ISETSO\MagazineBundle\Entity\magazine\Magazine
     */
    public function getToMagazine()
    {
        return $this->toMagazine;
    }
}
