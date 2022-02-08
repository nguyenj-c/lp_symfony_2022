<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookRepository::class), ORM\Table(name: 'book')]
class Book
{
    public function __construct(
        #[ORM\Id,
        ORM\GeneratedValue,
        ORM\Column(type: 'integer')] private int $id,
        #[ORM\Column(type: 'string', length: 255)] private string $label,
        #[ORM\Column(type: 'string', length: 255)] private string $isbn,
        #[ORM\ManyToOne(targetEntity: Category::class),
        ORM\JoinColumn(name: 'category', referencedColumnName: 'id')] private Category $category,
    ) {
    }

    public function id(): int
    {
        return $this->id;
    }

    public function label(): string
    {
        return $this->label;
    }

    public function isbn(): string
    {
        return $this->isbn;
    }

    public function category(): Category
    {
        return $this->category;
    }
}
