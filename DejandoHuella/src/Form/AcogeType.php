<?php

namespace App\Form;

use App\Entity\Acoge;
use PhpParser\Parser\Multiple;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AcogeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class)
            ->add('nombre')
            ->add('apellido')
            ->add('telefono')
            ->add('direccion')
            ->add('fechaNacimiento', BirthdayType::class)
            // ->add('usuario')
            ->add('animal')
            ->add('especie',ChoiceType::class,  [
                'choices'  => [
                    'Perro' => 'perro',
                    'Gato' => 'gato',
                ],
            ] )
            ->add('etapa',ChoiceType::class, [
                'choices' => [
                    'Biberón' => 'biberon',
                    'Cachorro' => 'cachorro',
                    'Adulto' => 'adulto',
                    'Enfermo' => 'enfermo',
                ],
            ] )
            ->add('tamano',ChoiceType::class, [
                'choices'  => [
                    'Pequeño' => 'pequeno',
                    'Mediano' => 'mediano',
                    'Grande' => 'grande',
                 
                ],
            ] )
            ->add('sexo',ChoiceType::class, [
                'choices'  => [
                    'Hembra' => 'hembra',
                    'Macho' => 'macho',
                ],
            ] )
            ->add('Enviar', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Acoge::class,
        ]);
    }
}
