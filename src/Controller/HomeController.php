<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function new(): Response
    {
        $slug='test';

        return $this->render('home.html.twig', [
            'slug' => $slug,
        ]);
    }

}