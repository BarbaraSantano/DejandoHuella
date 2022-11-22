<?php

namespace App\Controller;

use App\Entity\Acoge;
use App\Form\AcogeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AcogeController extends AbstractController
{
    private $em;

    /** 
     * @param $em
     */

    public function __construct(EntityManagerInterface $em) {
        $this->em=$em;
    }

    #[Route('/acoge', name: 'app_acoge')]

    public function index(Request $request): Response
    {
        $acoge = new Acoge();
        $form = $this->createForm(AcogeType::class, $acoge);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($acoge);
            $this->em->flush();
            $this->addFlash('exito', 'Formulario enviado correctamente');
            return $this->redirect('http://localhost:3000/');
        }

        return $this->render('acoge/index.html.twig', [
            'form_acoge' => $form->createView()
        ]);
    }
}
