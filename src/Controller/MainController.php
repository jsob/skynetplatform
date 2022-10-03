<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    #[Route('/main', name: 'app_main')]
    public function index(Request $request): Response
    {
        dump($request);
        return  $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
