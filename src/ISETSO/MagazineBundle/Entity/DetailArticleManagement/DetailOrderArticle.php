<?php

namespace ISETSO\MagazineBundle\Entity\DetailArticleManagement;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ISETSO\MagazineBundle\Model\Detail;

/**
 * DetailOrderArticle
 *
 * @ORM\Table(name="detail_order_article")
 * @ORM\Entity(repositoryClass="ISETSO\MagazineBundle\Repository\DetailArticleManagement\DetailOrderArticleRepository")
 */
class DetailOrderArticle extends Detail
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
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     * @Assert\NotBlank()
     */
    protected $quantity;

    /**
     * @ORM\ManyToOne(targetEntity="ISETSO\MagazineBundle\Entity\Article\Article", inversedBy="detailOrder")
     * @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     * @Assert\NotBlank()
     */
    protected $article;
}
