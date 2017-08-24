<?php

namespace ISETSO\MagazineBundle\Entity\Article;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * ArticleConsumable
 *
 * @ORM\Table(name="article_consumable")
 * @ORM\Entity(repositoryClass="ISETSO\MagazineBundle\Repository\Article\ArticleConsumableRepository")
 */
class ArticleConsumable extends Article
{
    
    /**
     * @var integer
     *
     * @ORM\Column(name="minThreshold", type="integer")
     * @Assert\NotBlank()
     */
    private $minThreshold;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxThreshold", type="integer")
     * @Assert\NotBlank()
     */
    private $maxThreshold;

    /**
     * Set minThreshold
     *
     * @param integer $minThreshold
     *
     * @return ArticleConsumable
     */
    public function setMinThreshold($minThreshold)
    {
        $this->minThreshold = $minThreshold;

        return $this;
    }

    /**
     * Get minThreshold
     *
     * @return integer
     */
    public function getMinThreshold()
    {
        return $this->minThreshold;
    }

    /**
     * Set maxThreshold
     *
     * @param integer $maxThreshold
     *
     * @return ArticleConsumable
     */
    public function setMaxThreshold($maxThreshold)
    {
        $this->maxThreshold = $maxThreshold;

        return $this;
    }

    /**
     * Get maxThreshold
     *
     * @return integer
     */
    public function getMaxThreshold()
    {
        return $this->maxThreshold;
    }

    
}
