<?php

namespace App\Form;

use App\Entity\Usuario;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsuarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            ->add('roles')
            ->add('password')
            ->add('telefono')
            ->add('nombre')
            ->add('apellido')
            ->add('direccion')
            ->add('fecha_nacimiento')
            ->add('iban')
            // ->add('isVerified')
            // ->add('acoge')
            // ->add('adopta')
            // ->add('padrino')
            // ->add('socio')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Usuario::class,
        ]);
    }
}
