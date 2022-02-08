<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Book;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    #[Route('/book', name: 'book_list')]
    public function all(ManagerRegistry $doctrine): \Symfony\Component\HttpFoundation\JsonResponse
    {
        $bookRepository = $doctrine->getRepository(Book::class);

        return $this->json($bookRepository->findAll());
    }

    #[Route('/book/{id}', name: 'book_item')]
    public function item(ManagerRegistry $doctrine, int $id): \Symfony\Component\HttpFoundation\JsonResponse
    {
        $bookRepository = $doctrine->getRepository(Book::class);

        return $this->json($bookRepository->find($id));
    }

    public function postAction(Request $request)
    {
        $book = $this->payload($request);

        return $this->json(new Book(
            id: $book['id'] ?? random_int(1, 100),
            label: $book['label'],
            isbn: $book['isbn'],
            category: $book['category'],
        ));
    }

    public function patchAction(Request $request)
    {
        $oldBook = new Book(random_int(1, 100), 'A label', 'An isbn', 1);

        $book = $this->payload($request);

        return $this->json(new Book(
            id: $oldBook->id(),
            label: $book['label'],
            isbn: $oldBook->isbn(),
            category: $book['category'],
        ));
    }

    private function payload(Request $request): array
    {
        return json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR);
    }
}
