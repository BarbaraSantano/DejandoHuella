<?php

namespace App\Controller;

use App\Entity\Perro;
use App\Form\PerroType;
use App\Repository\PerroRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/perro')]
class PerroController extends AbstractController
{
    #[Route('/', name: 'app_perro_index', methods: ['GET'])]
    public function index(PerroRepository $perroRepository): Response
    {
        return $this->render('perro/index.html.twig', [
            'perros' => $perroRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_perro_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PerroRepository $perroRepository): Response
    {
        $perro = new Perro();
        $form = $this->createForm(PerroType::class, $perro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $perroRepository->save($perro, true);

            return $this->redirectToRoute('app_perro_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('perro/new.html.twig', [
            'perro' => $perro,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_perro_show', methods: ['GET'])]
    public function show(Perro $perro): Response
    {
        return $this->render('perro/show.html.twig', [
            'perro' => $perro,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_perro_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Perro $perro, PerroRepository $perroRepository): Response
    {
        $form = $this->createForm(PerroType::class, $perro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $perroRepository->save($perro, true);

            return $this->redirectToRoute('app_perro_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('perro/edit.html.twig', [
            'perro' => $perro,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_perro_delete', methods: ['POST'])]
    public function delete(Request $request, Perro $perro, PerroRepository $perroRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$perro->getId(), $request->request->get('_token'))) {
            $perroRepository->remove($perro, true);
        }

        return $this->redirectToRoute('app_perro_index', [], Response::HTTP_SEE_OTHER);
    }
}
