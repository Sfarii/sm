<?php

namespace ISETSO\MagazineBundle\Entity\ArticleManagement;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * DischargeArticleToLocal
 *
 * @ORM\Table(name="discharge_article_to_local")
 * @ORM\Entity(repositoryClass="ISETSO\MagazineBundle\Repository\ArticleManagement\DischargeArticleToLocalRepository")
 */
class DischargeArticleToLocal extends DischargeArticle
{
    /**
     * @ORM\ManyToOne(targetEntity="ISETSO\MagazineBundle\Entity\Local\Local" , inversedBy="dischargeArticle")
     * @ORM\JoinColumn(name="magazine_id", referencedColumnName="id")
     * @Assert\NotBlank()
     */
    private $toLocal;

    /**
     * Set toLocal
     *
     * @param \ISETSO\MagazineBundle\Entity\Local\Local $toLocal
     *
     * @return DischargeArticleToMagazine
     */
    public function setToLocal(\ISETSO\MagazineBundle\Entity\Local\Local $toLocal = null)
    {
        $this->toLocal = $toLocal;

        return $this;
    }

    /**
     * Get toLocal
     *
     * @return \ISETSO\MagazineBundle\Entity\Local\Local
     */
    public function getToLocal()
    {
        return $this->toLocal;
    }
}

