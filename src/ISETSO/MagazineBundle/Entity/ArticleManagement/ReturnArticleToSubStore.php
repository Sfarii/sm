<?php

namespace ISETSO\MagazineBundle\Entity\ArticleManagement;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReturnArticleToSubStore
 *
 * @ORM\Table(name="return_article_to_sub_store")
 * @ORM\Entity(repositoryClass="ISETSO\MagazineBundle\Repository\ArticleManagement\ReturnArticleToSubStoreRepository")
 */
class ReturnArticleToSubStore extends ReturnArticle
{
    /**
     * @ORM\ManyToOne(targetEntity="ISETSO\MagazineBundle\Entity\magazine\Magazine" , inversedBy="returnArticle")
     * @ORM\JoinColumn(name="SubStore_id", referencedColumnName="id")
     */
    private $toSubStore;

    /**
     * Set toSubStore
     *
     * @param \ISETSO\MagazineBundle\Entity\magazine\Magazine $toSubStore
     *
     * @return DischargeArticleToMagazine
     */
    public function setToSubStore(\ISETSO\MagazineBundle\Entity\magazine\Magazine $toSubStore = null)
    {
        $this->toSubStore = $toSubStore;

        return $this;
    }

    /**
     * Get toSubStore
     *
     * @return \ISETSO\MagazineBundle\Entity\magazine\Magazine
     */
    public function getToSubStore()
    {
        return $this->toSubStore;
    }
}

