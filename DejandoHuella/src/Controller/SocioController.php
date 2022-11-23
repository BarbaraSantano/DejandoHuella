<?php

namespace App\Controller;

use App\Entity\Socio;
use App\Form\SocioType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SocioController extends AbstractController
{
    private $em;

    /** 
     * @param $em
     */

    public function __construct(EntityManagerInterface $em) {
        $this->em=$em;
    }

    #[Route('/socio', name: 'app_socio')]
    public function index(Request $request): Response
    {
        $socio = new Socio();
        $form = $this->createForm(SocioType::class, $socio);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($socio);
            $this->em->flush();
            $this->addFlash('exito', 'Formulario enviado correctamente');
            return $this->redirectToRoute('app_socio');
        }

        return $this->render('socio/index.html.twig', [
            'form_socio' => $form->createView()
        ]);
    }
}
