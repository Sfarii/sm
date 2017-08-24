<?php

namespace ISETSO\MagazineBundle\Entity\ArticleManagement;

use Doctrine\ORM\Mapping as ORM;
use ISETSO\MagazineBundle\Entity\Article\ArticleConsumable;
use ISETSO\MagazineBundle\Entity\Article\ArticleDurable;

/**
 * DischargeArticleToUser
 *
 * @ORM\Table(name="discharge_article_to_user")
 * @ORM\Entity(repositoryClass="ISETSO\MagazineBundle\Repository\ArticleManagement\DischargeArticleToUserRepository")
 */
class DischargeArticleToUser extends DischargeArticle
{
    
    /**
     * @ORM\ManyToOne(targetEntity="ISETSO\UserBundle\Entity\User\User")
     * @ORM\JoinColumn(name="touser_id", referencedColumnName="id")
     */
    private $toUser;

    /**
     * Get detail consumable
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDetailConsumable()
    {
        $result = new \Doctrine\Common\Collections\ArrayCollection();
        foreach ($this->detail as $detail) {
            if ($detail->getSupportingDocument()->getArticle() InstanceOf ArticleConsumable){
                $result->add($detail);
            }
        }
        return $result; 
    }

    /**
     * Get detail Durable
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDetailDurable()
    {
        $result = new \Doctrine\Common\Collections\ArrayCollection();
        foreach ($this->detail as $detail) {
            if ($detail->getSupportingDocument()->getArticle() InstanceOf ArticleDurable){
                $result->add($detail);
            }
        }
        return $result; 
    }

    /**
     * Set toUser
     *
     * @param \ISETSO\UserBundle\Entity\User\User $toUser
     *
     * @return DischargeArticleToUser
     */
    public function setToUser(\ISETSO\UserBundle\Entity\User\User $toUser = null)
    {
        $this->toUser = $toUser;

        return $this;
    }

    /**
     * Get toUser
     *
     * @return \ISETSO\UserBundle\Entity\User\User
     */
    public function getToUser()
    {
        return $this->toUser;
    }

    
}
