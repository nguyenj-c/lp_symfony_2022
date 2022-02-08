<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class), ORM\Table(name: 'category')]
class Category
{
    public function __construct(
        #[ORM\Id,
        ORM\GeneratedValue,
        ORM\Column(type: 'integer')] private int $id,
        #[ORM\Column(type: 'string', length: 255)] private string $label,
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
}
