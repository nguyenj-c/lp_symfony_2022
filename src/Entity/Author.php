<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\AuthorRepository;
use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AuthorRepository::class), ORM\Table(name: 'author')]
class Author
{
    public function __construct(
        #[ORM\Id,
        ORM\GeneratedValue,
        ORM\Column(type: 'integer')] private int $id,
        #[ORM\Column(type: 'string', length: 255)] private string $firstName,
        #[ORM\Column(type: 'string', length: 255)] private string $lastName,
        #[ORM\Column(type: 'date')] private DateTimeImmutable $birthDate,
    ) {
    }

    public function id(): int
    {
        return $this->id;
    }

    public function firstName(): string
    {
        return $this->firstName;
    }

    public function lastName(): string
    {
        return $this->lastName;
    }

    public function birthDate(): DateTimeImmutable
    {
        return $this->birthDate;
    }
}
