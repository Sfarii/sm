<?php

namespace ISETSO\MagazineBundle\Model;

/**
 * Detail
 *
 * @ORM\MappedSuperclass
 */
class Detail
{
    /**
     * @var integer
     */
    var $qteReturned;

    /**
     * Get qteReturned
     *
     * @return integer
     */
    public function getQteReturned()
    {
        return $this->qteReturned;
    }

    /**
     * set qteReturned
     *
     * @return integer
     */
    public function setQteReturned($qteReturned)
    {
        $this->qteReturned = $qteReturned;
        
        return $this;
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
     * set id
     *
     * @return integer
     */
    public function setId($id)
    {
        $this->id = $id;
        
        return $this;
    }
    

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Detail
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set article
     *
     * @param \ISETSO\MagazineBundle\Entity\Article\Article $article
     *
     * @return Detail
     */
    public function setArticle(\ISETSO\MagazineBundle\Entity\Article\Article $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \ISETSO\MagazineBundle\Entity\Article\Article
     */
    public function getArticle()
    {
        return $this->article;
    }
}
