<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Category;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    #[Route('/category', name: 'category_list')]
    public function all(ManagerRegistry $doctrine): JsonResponse
    {
        $bookRepository = $doctrine->getRepository(Category::class);

        return $this->json($bookRepository->findAll());
    }

    #[Route('/category/{id}', name: 'category_item')]
    public function item(ManagerRegistry $doctrine, int $id): JsonResponse
    {
        $bookRepository = $doctrine->getRepository(Category::class);

        return $this->json($bookRepository->find($id));
    }
}
