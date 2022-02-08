<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Author;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    #[Route('/author', name: 'author_list')]
    public function all(ManagerRegistry $doctrine): JsonResponse
    {
        $bookRepository = $doctrine->getRepository(Author::class);

        return $this->json($bookRepository->findAll());
    }

    #[Route('/author/{id}', name: 'author_item')]
    public function item(ManagerRegistry $doctrine, int $id): JsonResponse
    {
        $bookRepository = $doctrine->getRepository(Author::class);

        return $this->json($bookRepository->find($id));
    }
}
