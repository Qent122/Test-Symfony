<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{
    #[Route('/articles', name: 'app_articles')]
    public function index(): Response
    {
        return $this->render('articles/index.html.twig', [
            'controller_name' => 'La page article',
        ]);
    }

    #[Route('/articles/{id}', name: 'articles__name_id', requirements: ['id' => '\d+'])]
    public function articleId(int $id): Response
    {
        return new Response("<h1>L'article que vous cherchez est le numéro: $id</h1>");
    }

    #[Route('/articles/{name}', name: 'articles_name')]
    public function article(string $name): Response
    {
        return new Response("<h1>L'article que vous cherchez est : $name</h1>");
    }
}