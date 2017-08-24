<?php

namespace ISETSO\MagazineBundle\Entity\Journal;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use ISETSO\MagazineBundle\Model\Security;

/**
 * Journal
 * @ORM\Entity(repositoryClass="ISETSO\MagazineBundle\Repository\Journal\JournalRepository")
 * @ORM\InheritanceType("JOINED")
 * 
 */
class Journal extends Security
{
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $type;
    
    /**
     * @var \date
     *
     *
     * @ORM\Column(name="dateEntre", type="date")
     * 
     */
    private $dateEntre;

    /**
     * @ORM\ManyToOne(targetEntity="ISETSO\MagazineBundle\Entity\Provider\Provider", inversedBy="journals")
     * @ORM\JoinColumn(name="provider_id", referencedColumnName="id")
     * @Assert\NotBlank()
     */
    private $provider;

    /**
     * @ORM\ManyToMany(targetEntity="SupportingDocument", inversedBy="journal")
     * @ORM\JoinColumn(name="supportingDocument_id", referencedColumnName="id")
     * 
     */
    private $supportingDocument;

    /**
     * @ORM\ManyToOne(targetEntity="Origin", inversedBy="journals")
     * @ORM\JoinColumn(name="origin_id", referencedColumnName="id")
     * @Assert\NotBlank()
     */
    private $origin;

    /**
     * @ORM\ManyToOne(targetEntity="ISETSO\UserBundle\Entity\User\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->supportingDocument = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set type
     *
     * @param string $type
     *
     * @return Journal
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set dateEntre
     *
     * @param \DateTime $dateEntre
     *
     * @return Journal
     */
    public function setDateEntre($dateEntre)
    {
        $this->dateEntre = $dateEntre;

        return $this;
    }

    /**
     * Get dateEntre
     *
     * @return \DateTime
     */
    public function getDateEntre()
    {
        return $this->dateEntre;
    }

    /**
     * Set provider
     *
     * @param \ISETSO\MagazineBundle\Entity\Provider\Provider $provider
     *
     * @return Journal
     */
    public function setProvider(\ISETSO\MagazineBundle\Entity\Provider\Provider $provider = null)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get provider
     *
     * @return \ISETSO\MagazineBundle\Entity\Provider\Provider
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Add supportingDocument
     *
     * @param \ISETSO\MagazineBundle\Entity\Journal\SupportingDocument $supportingDocument
     *
     * @return Journal
     */
    public function addSupportingDocument(\ISETSO\MagazineBundle\Entity\Journal\SupportingDocument $supportingDocument)
    {
        $this->supportingDocument[] = $supportingDocument;

        return $this;
    }

    /**
     * Remove supportingDocument
     *
     * @param \ISETSO\MagazineBundle\Entity\Journal\SupportingDocument $supportingDocument
     */
    public function removeSupportingDocument(\ISETSO\MagazineBundle\Entity\Journal\SupportingDocument $supportingDocument)
    {
        $this->supportingDocument->removeElement($supportingDocument);
    }

    /**
     * Get supportingDocument
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSupportingDocument()
    {
        return $this->supportingDocument;
    }

    /**
     * Set origin
     *
     * @param \ISETSO\MagazineBundle\Entity\Journal\Origin $origin
     *
     * @return Journal
     */
    public function setOrigin(\ISETSO\MagazineBundle\Entity\Journal\Origin $origin = null)
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * Get origin
     *
     * @return \ISETSO\MagazineBundle\Entity\Journal\Origin
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Set user
     *
     * @param \ISETSO\UserBundle\Entity\User\User $user
     *
     * @return Journal
     */
    public function setUser(\ISETSO\UserBundle\Entity\User\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \ISETSO\UserBundle\Entity\User\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
