<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\LibraryRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;

#[ORM\Entity(repositoryClass: LibraryRepository::class), ORM\Table(name: 'library')]
class Library
{
    public function __construct(
        #[ORM\Id,
        ORM\GeneratedValue,
        ORM\Column(type: 'integer')] private int $id,
        #[ORM\Column(type: 'string', length: 255)] private string $name,
        #[ORM\ManyToMany(targetEntity: Book::class)] /* Table de jointure */ #[ORM\JoinTable(name: 'book_library')] /*Colonne referençant notre entité dans la table de jointure */ #[ORM\JoinColumn(name: 'library', referencedColumnName: 'id')] /* Colonne referençant l'entité table dans la table de jointure */ #[ORM\InverseJoinColumn(name: 'book', referencedColumnName: 'id')] private $books,
    ) {
    }

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function books(): PersistentCollection
    {
        return $this->books;
    }
}
