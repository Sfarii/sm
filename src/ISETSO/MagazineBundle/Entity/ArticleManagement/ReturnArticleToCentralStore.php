<?php

namespace ISETSO\MagazineBundle\Entity\ArticleManagement;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReturnArticleToCentralStore
 *
 * @ORM\Table(name="return_article_to_central_store")
 * @ORM\Entity(repositoryClass="ISETSO\MagazineBundle\Repository\ArticleManagement\ReturnArticleToCentralStoreRepository")
 */
class ReturnArticleToCentralStore extends ReturnArticle
{
    
}

