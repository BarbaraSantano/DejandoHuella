<?php

namespace App\Form;

use App\Entity\Padrino;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PadrinoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('cantidad')
            ->add('modalidad_pago')
            ->add('nombre')
            ->add('apellido')
            ->add('email')
            ->add('telefono')
            ->add('direccion')
            ->add('fechaNacimiento')
            // ->add('usuario')
            ->add('animals')
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Padrino::class,
        ]);
    }
}
