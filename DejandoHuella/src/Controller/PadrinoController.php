<?php

namespace App\Controller;

use App\Entity\Padrino;
use App\Form\PadrinoType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PadrinoController extends AbstractController
{
    private $em;

    /** 
     * @param $em
     */

    public function __construct(EntityManagerInterface $em) {
        $this->em=$em;
    }

    #[Route('/padrino', name: 'app_padrino')]
    public function index(Request $request): Response
    {
        $padrino = new Padrino();
        $form = $this->createForm(PadrinoType::class, $padrino);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($padrino);
            $this->em->flush();
            $this->addFlash('exito', 'Formulario enviado correctamente');
           return $this->redirect('http://localhost:3000/');
        }

        return $this->render('padrino/index.html.twig', [
            'form_padrino' => $form->createView()
        ]);
    }
}
