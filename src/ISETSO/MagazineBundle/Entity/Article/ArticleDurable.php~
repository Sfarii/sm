<?php

namespace ISETSO\MagazineBundle\Entity\Article;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * ArticleDurable
 *
 * @ORM\Table(name="article_durable")
 * @ORM\Entity(repositoryClass="ISETSO\MagazineBundle\Repository\Article\ArticleDurableRepository")
 */
class ArticleDurable extends Article
{
    
    /**
     * @var integer
     *
     * @ORM\Column(name="Garenti", type="integer")
     * @Assert\NotBlank()
     */
    private $garenti;


    /**
     * Set garenti
     *
     * @param integer $garenti
     *
     * @return ArticleDurable
     */
    public function setGarenti($garenti)
    {
        $this->garenti = $garenti;

        return $this;
    }

    /**
     * Get garenti
     *
     * @return integer
     */
    public function getGarenti()
    {
        return $this->garenti;
    }
}
