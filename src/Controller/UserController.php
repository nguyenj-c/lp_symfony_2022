<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'user_list')]
    public function all(ManagerRegistry $doctrine): JsonResponse
    {
        $bookRepository = $doctrine->getRepository(User::class);

        return $this->json($bookRepository->findAll());
    }

    #[Route('/user/{id}', name: 'user_item')]
    public function item(ManagerRegistry $doctrine, int $id): JsonResponse
    {
        $bookRepository = $doctrine->getRepository(User::class);

        return $this->json($bookRepository->find($id));
    }
}
