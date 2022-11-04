<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SuperuserController extends AbstractController
{
    #[Route('/superuser', name: 'app_superuser')]
    public function index(): Response
    {
        return $this->render('superuser/index.html.twig', [
            'controller_name' => 'SuperuserController',
        ]);
    }
}
