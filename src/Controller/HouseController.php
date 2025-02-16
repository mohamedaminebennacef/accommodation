<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\HouseRepository;

final class HouseController extends AbstractController
{
    #[Route('/houses', name: 'house_index')]
    public function index(HouseRepository $repository): Response
    {
        $houses = $repository->findAll();
        dd($houses);
        return $this->render('house/index.html.twig', [
            'controller_name' => 'HouseController',
        ]);
    }
}
