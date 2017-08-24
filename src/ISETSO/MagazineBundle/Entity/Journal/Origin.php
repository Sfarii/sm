<?php

namespace ISETSO\MagazineBundle\Entity\Journal;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use ISETSO\MagazineBundle\Model\Security;
/**
 * Origin
 *
 * @ORM\Table(name="origin")
 * @ORM\Entity(repositoryClass="ISETSO\MagazineBundle\Repository\Journal\OriginRepository")
 * @UniqueEntity("designation")
 */
class Origin extends Security
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
     * @ORM\ManyToOne(targetEntity="ISETSO\UserBundle\Entity\User\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="Journal", mappedBy="origin",fetch="EXTRA_LAZY" )
     */
    private $journals;

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
     * Set designation
     *
     * @param string $designation
     *
     * @return Origin
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
     * Set user
     *
     * @param \ISETSO\UserBundle\Entity\User\User $user
     *
     * @return Origin
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

    /**
     * Add journal
     *
     * @param \ISETSO\MagazineBundle\Entity\Journal\Journal $journal
     *
     * @return Origin
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
}
