<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class), ORM\Table(name: 'utilisateur')]
class User
{
    public function __construct(
        #[ORM\Id,
        ORM\GeneratedValue,
        ORM\Column(type: 'integer')] private int $id,
        #[ORM\Column(type: 'string', length: 255)] private string $firstName,
        #[ORM\Column(type: 'string', length: 255)] private string $lastName,
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
}
