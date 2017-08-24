<?php

namespace ISETSO\MagazineBundle\Entity\Magazine;

use ISETSO\MagazineBundle\Model\ArticleManagement;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * MagazineDischarge
 *
 * @ORM\Table(name="magazine_discharge")
 * @ORM\Entity(repositoryClass="ISETSO\MagazineBundle\Repository\Magazine\MagazineDischargeRepository")
 */
class MagazineDischarge extends ArticleManagement
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
     * @ORM\ManyToMany(targetEntity="DetailMagazine")
     * @ORM\JoinColumn(name="detailDischargeArticle_id", referencedColumnName="id")
     * @Assert\NotBlank()
     */
    protected $detail;
    /**
     * @ORM\ManyToOne(targetEntity="ISETSO\MagazineBundle\Entity\magazine\Magazine" , inversedBy="dischargeMagazine")
     * @ORM\JoinColumn(name="SubStore_id", referencedColumnName="id")
     */
    protected $toSubStore;

    /**
     * @ORM\ManyToOne(targetEntity="ISETSO\UserBundle\Entity\User\User")
     * @ORM\JoinColumn(name="touser_id", referencedColumnName="id")
     */
    protected $toUser;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->detail = new \Doctrine\Common\Collections\ArrayCollection();
    }

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

    /**
     * Set toUser
     *
     * @param \ISETSO\UserBundle\Entity\User\User $toUser
     *
     * @return MagazineDischarge
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

    /**
     * Add detail
     *
     * @param \ISETSO\MagazineBundle\Entity\Magazine\DetailMagazine $detail
     *
     * @return MagazineDischarge
     */
    public function addDetail(\ISETSO\MagazineBundle\Entity\Magazine\DetailMagazine $detail)
    {
        $this->detail[] = $detail;

        return $this;
    }

    /**
     * Remove detail
     *
     * @param \ISETSO\MagazineBundle\Entity\Magazine\DetailMagazine $detail
     */
    public function removeDetail(\ISETSO\MagazineBundle\Entity\Magazine\DetailMagazine $detail)
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
