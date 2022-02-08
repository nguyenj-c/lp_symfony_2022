<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Library;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LibraryController extends AbstractController
{
    #[Route('/library', name: 'library_list')]
    public function all(ManagerRegistry $doctrine): JsonResponse
    {
        $bookRepository = $doctrine->getRepository(Library::class);

        return $this->json($bookRepository->findAll());
    }

    #[Route('/library/{id}', name: 'library_item')]
    public function item(ManagerRegistry $doctrine, int $id, Request $request): JsonResponse
    {
        $bookRepository = $doctrine->getRepository(Library::class);

        $withBooks = $request->query->getBoolean('withBooks', false);
        return $this->json($bookRepository->find($id), 200, [], ['with_books' => $withBooks]);
    }
}
