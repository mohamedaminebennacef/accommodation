<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HouseController extends AbstractController
{
    #[Route('/houses', name: 'houses_index')]
    public function index(): Response
    {
        return $this->render('house/index.html.twig', [
            'controller_name' => 'HouseController',
        ]);
    }
}
