<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MensionLegaleController extends AbstractController
{
    #[Route('/mention', name: 'mention_legale')]
    public function index(): Response
    {
        return $this->render('mention_legale/index.html.twig', [
            'controller_name' => 'Mentions Légales',
        ]);
    }

    #[Route('/mention/today', name: 'mention_legale_today')]
    public function today(): Response {
        return new Response("<h1> Yo dudes</h1>");
    }


}
