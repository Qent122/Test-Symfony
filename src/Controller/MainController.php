<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'main')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'World',
        ]);
    }

    #[Route('/blog/{name}', name: 'main_blog')]
    public function blogName(string $name ='narvalo'): Response
    {
        // dd($name);
        return new response ("<h1>C'est une page de blog. T'es con ou quoi $name!</h1>");
    }

    #[Route('/blog/{id}', name: 'main_blog_id')]
    public function blogId(int $id =0): Response
    {
        // dd($name);
        return new response ("<h1>C'est une page de blog. valeur $id!</h1>");
    }

}
