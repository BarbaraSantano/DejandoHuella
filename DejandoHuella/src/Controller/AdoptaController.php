<?php

namespace App\Controller;

use App\Entity\Adopta;
use App\Form\AdoptaType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdoptaController extends AbstractController
{
    private $em;

    /** 
     * @param $em
     */

    public function __construct(EntityManagerInterface $em) {
        $this->em=$em;
    }

    #[Route('/adopta', name: 'app_adopta')]
    public function index(Request $request): Response
    {
        $adopta = new Adopta();
        $form = $this->createForm(AdoptaType::class, $adopta);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($adopta);
            $this->em->flush();
            return $this->redirectToRoute('app_adopta');
        }

        return $this->render('adopta/index.html.twig', [
            'form_adopta' => $form->createView()
        ]);
    }
}
