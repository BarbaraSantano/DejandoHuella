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
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class AcogeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class)
            ->add('nombre')
            ->add('apellido')
            ->add('telefono',null,  ['label'=> 'Teléfono'])
            ->add('direccion', null,  ['label'=> 'Dirección'])
            ->add('fechaNacimiento', BirthdayType::class , ['label'=> 'Fecha de nacimiento'] )
            // ->add('usuario')
          
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
            ->add('tamano' ,ChoiceType::class, [
                'label' => "Tamaño",
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
            // ->add('animal', null,  ['label'=> 'Si quieres acoger a una de nuestras mascotas en especial, elige su nombre en la lista',])
            ->add('gato', null,  ['label'=> 'Si quieres acoger a uno de nuestros gatos en especial, elige su nombre en la lista',])
            ->add('perro', null,  ['label'=> 'Si quieres acoger a una de nuestros perros en especial, elige su nombre en la lista',])
            ->add('agreeTerms', CheckboxType::class, [
                'label' => "Acepto los términos y condiciones",
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'Debes aceptar los términos y condiciones para continuar.',
                    ]),
                ],
            ])
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
