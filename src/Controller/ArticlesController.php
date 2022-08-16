<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/article', name: 'main')]
    public function index()
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'Salut Michel',
        ]);
    }

    #[Route('/article/{id}', name: 'main_blog_id', requirements: ['id' => '\d+'])]
    public function blogId(int $id)
    {
        // dd($name);
        return new Response("<h1>Ceci est une page de blog, valeur $id</h1>");
    }

    #[Route('/article/{name}', name: 'main_blog_name')]
    public function blogName(string $name)
    {
        // dd($name);
        return new Response("<h1>Ceci est une page de blog, page $name</h1>");
    }
}