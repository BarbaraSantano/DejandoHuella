<?php

namespace App\Controller;

use App\Entity\Gato;
use App\Form\GatoType;
use App\Repository\GatoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/gato')]
class GatoController extends AbstractController
{
    #[Route('/', name: 'app_gato_index', methods: ['GET'])]
    public function index(GatoRepository $gatoRepository): Response
    {
        return $this->render('gato/index.html.twig', [
            'gatos' => $gatoRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_gato_new', methods: ['GET', 'POST'])]
    public function new(Request $request, GatoRepository $gatoRepository): Response
    {
        $gato = new Gato();
        $form = $this->createForm(GatoType::class, $gato);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $gatoRepository->save($gato, true);

            return $this->redirectToRoute('app_gato_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('gato/new.html.twig', [
            'gato' => $gato,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_gato_show', methods: ['GET'])]
    public function show(Gato $gato): Response
    {
        return $this->render('gato/show.html.twig', [
            'gato' => $gato,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_gato_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Gato $gato, GatoRepository $gatoRepository): Response
    {
        $form = $this->createForm(GatoType::class, $gato);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $gatoRepository->save($gato, true);

            return $this->redirectToRoute('app_gato_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('gato/edit.html.twig', [
            'gato' => $gato,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_gato_delete', methods: ['POST'])]
    public function delete(Request $request, Gato $gato, GatoRepository $gatoRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$gato->getId(), $request->request->get('_token'))) {
            $gatoRepository->remove($gato, true);
        }

        return $this->redirectToRoute('app_gato_index', [], Response::HTTP_SEE_OTHER);
    }
}
