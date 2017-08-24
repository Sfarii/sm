<?php

namespace ISETSO\MagazineBundle\Entity\Journal;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * JournalConsumable
 *
 * @ORM\Table(name="journal_consumable")
 * @ORM\Entity(repositoryClass="ISETSO\MagazineBundle\Repository\Journal\JournalConsumableRepository")
 */
class JournalConsumable extends Journal
{
}
