<?php

namespace ISETSO\MagazineBundle\Entity\Provider;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use ISETSO\MagazineBundle\Model\Security;

/**
 * Provider
 *
 * @ORM\Table(name="provider")
 * @ORM\Entity(repositoryClass="ISETSO\MagazineBundle\Repository\Provider\ProviderRepository")
 * @UniqueEntity("socialReason")
 * @UniqueEntity("phone")
 * @UniqueEntity("address")
 * @UniqueEntity("fax")
 * @UniqueEntity("email")
 */
class Provider extends Security
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
     * @ORM\Column(name="socialReason", type="string", length=255,  unique=true)
     * @Assert\NotBlank()
     */
    private $socialReason;
    
    /**
     * @var int
     *
     * @ORM\Column(name="phone", type="integer",  unique=true)
     * @Assert\NotBlank()
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255,  unique=true)
     * @Assert\NotBlank()
     */
    private $address;

    /**
     * @var int*
     *
     * @ORM\Column(name="fax", type="integer", length=255,  unique=true)
     * @Assert\NotBlank()
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255,  unique=true)
     * @Assert\NotBlank()
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $contact;

    /**
     * @ORM\OneToMany(targetEntity="ISETSO\MagazineBundle\Entity\Journal\Journal", mappedBy="provider" ,fetch="EXTRA_LAZY" )
     */
    private $journals;

    /**
     * @ORM\ManyToOne(targetEntity="ActivityDomain", inversedBy="provider")
     * @ORM\JoinColumn(name="activityDomain_id", referencedColumnName="id")
     * @Assert\NotBlank()
     */
    private $activityDomain;    

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
        $this->journals = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set socialReason
     *
     * @param string $socialReason
     *
     * @return Provider
     */
    public function setSocialReason($socialReason)
    {
        $this->socialReason = $socialReason;

        return $this;
    }

    /**
     * Get socialReason
     *
     * @return string
     */
    public function getSocialReason()
    {
        return $this->socialReason;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     *
     * @return Provider
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return integer
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Provider
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set fax
     *
     * @param integer $fax
     *
     * @return Provider
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return integer
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Provider
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set contact
     *
     * @param string $contact
     *
     * @return Provider
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Add journal
     *
     * @param \ISETSO\MagazineBundle\Entity\Journal\Journal $journal
     *
     * @return Provider
     */
    public function addJournal(\ISETSO\MagazineBundle\Entity\Journal\Journal $journal)
    {
        $this->journals[] = $journal;

        return $this;
    }

    /**
     * Remove journal
     *
     * @param \ISETSO\MagazineBundle\Entity\Journal\Journal $journal
     */
    public function removeJournal(\ISETSO\MagazineBundle\Entity\Journal\Journal $journal)
    {
        $this->journals->removeElement($journal);
    }

    /**
     * Get journals
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJournals()
    {
        return $this->journals;
    }

    /**
     * Set activityDomain
     *
     * @param \ISETSO\MagazineBundle\Entity\Provider\ActivityDomain $activityDomain
     *
     * @return Provider
     */
    public function setActivityDomain(\ISETSO\MagazineBundle\Entity\Provider\ActivityDomain $activityDomain = null)
    {
        $this->activityDomain = $activityDomain;

        return $this;
    }

    /**
     * Get activityDomain
     *
     * @return \ISETSO\MagazineBundle\Entity\Provider\ActivityDomain
     */
    public function getActivityDomain()
    {
        return $this->activityDomain;
    }

    /**
     * Set user
     *
     * @param \ISETSO\UserBundle\Entity\User\User $user
     *
     * @return Provider
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
