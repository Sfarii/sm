<?php

namespace ISETSO\UserBundle\Entity\Message;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\MessageBundle\Entity\Thread as BaseThread;

/**
 * @ORM\Entity(repositoryClass="ISETSO\UserBundle\Repository\Message\ThreadRepository")
 * 
 */
class Thread extends BaseThread
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="\ISETSO\UserBundle\Entity\User\User")
     * @var \FOS\MessageBundle\Model\ParticipantInterface
     */
    protected $createdBy;

    /**
     * @ORM\OneToMany(
     *   targetEntity="Message",
     *   mappedBy="thread"
     * )
     * @var Message[]|\Doctrine\Common\Collections\Collection
     */
    protected $messages;

    /**
     * @ORM\OneToMany(
     *   targetEntity="ThreadMetadata",
     *   mappedBy="thread",
     *  fetch="EXTRA_LAZY",
     *   cascade={"all"}
     * )
     * @var ThreadMetadata[]|\Doctrine\Common\Collections\Collection
     */
    protected $metadata;

    /**
     * Remove message
     *
     * @param \ISETSO\UserBundle\Entity\Message $message
     */
    public function removeMessage(\ISETSO\UserBundle\Entity\Message $message)
    {
        $this->messages->removeElement($message);
    }

    /**
     * Add metadatum
     *
     * @param \ISETSO\UserBundle\Entity\ThreadMetadata $metadatum
     *
     * @return Thread
     */
    public function addMetadatum(\ISETSO\UserBundle\Entity\ThreadMetadata $metadatum)
    {
        $this->metadata[] = $metadatum;

        return $this;
    }

    /**
     * Remove metadatum
     *
     * @param \ISETSO\UserBundle\Entity\ThreadMetadata $metadatum
     */
    public function removeMetadatum(\ISETSO\UserBundle\Entity\ThreadMetadata $metadatum)
    {
        $this->metadata->removeElement($metadatum);
    }

    /**
     * Get metadata
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMetadata()
    {
        return $this->metadata;
    }
}
