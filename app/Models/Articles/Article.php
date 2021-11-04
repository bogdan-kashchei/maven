<?php
declare(strict_types=1);

namespace App\Models\Articles;

/**
 *
 */
class Article
{
    /** @var int */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $text;

    /** @var int */
    private $authorId;

    /** @var string */
    private $createdAt;
}