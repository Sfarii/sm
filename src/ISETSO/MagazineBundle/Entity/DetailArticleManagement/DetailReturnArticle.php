<?php

namespace ISETSO\MagazineBundle\Entity\DetailArticleManagement;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ISETSO\MagazineBundle\Model\Detail;

/**
 * DetailReturnArticle
 *
 * @ORM\Table(name="detail_return_article")
 * @ORM\Entity(repositoryClass="ISETSO\MagazineBundle\Repository\DetailArticleManagement\DetailReturnArticleRepository")
 */
class DetailReturnArticle extends Detail
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
     * @ORM\ManyToOne(targetEntity="ISETSO\MagazineBundle\Entity\Journal\SupportingDocument", inversedBy="detailReturn")
     * @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     * @Assert\NotBlank()
     */
    protected $supportingDocument;
    
    /**
     * Set supportingDocument
     *
     * @param \ISETSO\MagazineBundle\Entity\Journal\SupportingDocument $supportingDocument
     *
     * @return DetailDischargeArticle
     */
    public function setSupportingDocument(\ISETSO\MagazineBundle\Entity\Journal\SupportingDocument $supportingDocument = null)
    {
        $this->supportingDocument = $supportingDocument;

        return $this;
    }

    /**
     * Get supportingDocument
     *
     * @return \ISETSO\MagazineBundle\Entity\Journal\SupportingDocument
     */
    public function getSupportingDocument()
    {
        return $this->supportingDocument;
    }
}
