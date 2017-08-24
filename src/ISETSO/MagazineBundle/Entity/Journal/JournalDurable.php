<?php

namespace ISETSO\MagazineBundle\Entity\Journal;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * JournalDurable
 *
 * @ORM\Table(name="journal_durable")
 * @ORM\Entity(repositoryClass="ISETSO\MagazineBundle\Repository\Journal\JournalDurableRepository")
 */
class JournalDurable extends Journal
{
}
