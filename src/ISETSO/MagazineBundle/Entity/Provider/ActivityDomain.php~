<?php

namespace ISETSO\MagazineBundle\Entity\Provider;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use ISETSO\MagazineBundle\Model\Security;

/**
 * activitydomain
 *
 * @ORM\Table(name="activity_domain")
 * @ORM\Entity(repositoryClass="ISETSO\MagazineBundle\Repository\Provider\ActivityDomainRepository")
 * @UniqueEntity("designation")
 */
class ActivityDomain extends Security
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
     * @ORM\Column(name="designation", type="string", length=255, unique=true)
     * @Assert\NotBlank()
     */
    private $designation;

    /**
     * @ORM\OneToMany(targetEntity="Provider", mappedBy="activityDomain" ,fetch="EXTRA_LAZY")
     */
    private $provider;

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
        $this->provider = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set designation
     *
     * @param string $designation
     *
     * @return ActivityDomain
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Add provider
     *
     * @param \ISETSO\MagazineBundle\Entity\Provider\Provider $provider
     *
     * @return ActivityDomain
     */
    public function addProvider(\ISETSO\MagazineBundle\Entity\Provider\Provider $provider)
    {
        $this->provider[] = $provider;

        return $this;
    }

    /**
     * Remove provider
     *
     * @param \ISETSO\MagazineBundle\Entity\Provider\Provider $provider
     */
    public function removeProvider(\ISETSO\MagazineBundle\Entity\Provider\Provider $provider)
    {
        $this->provider->removeElement($provider);
    }

    /**
     * Get provider
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Set user
     *
     * @param \ISETSO\UserBundle\Entity\User\User $user
     *
     * @return ActivityDomain
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
