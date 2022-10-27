<?php

namespace App\Controller;

use App\Entity\Usuario;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    private $em;
    
    
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }


    #[Route('/registro', name: 'app_registro')]
    public function index(Request $request, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = new Usuario();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $plaintextPassword = $form->get('password')->getData();

            $hashedPassword = $passwordHasher->hashPassword(
                $user,
                $plaintextPassword
            );
            $user->setPassword($hashedPassword);

            $user->setRoles(['ROLE_USER']);
            $this->em->persist($user);
            $this->em->flush();
            $this->addFlash('exito', 'Registro correcto');
            return $this->redirectToRoute('app_registro');
        }

        return $this->render('user/index.html.twig', [
           
            'formulario'=>$form->createview()
        ]);
    }
}