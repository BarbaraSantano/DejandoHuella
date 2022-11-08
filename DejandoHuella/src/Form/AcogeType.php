<?php

namespace App\Form;

use App\Entity\Acoge;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AcogeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre')
            ->add('email')
            ->add('apellido')
            ->add('telefono')
            ->add('direccion')
            ->add('fechaNacimiento', DateType::class)
            // ->add('usuario')
            ->add('animal')
            // ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Acoge::class,
        ]);
    }
}
