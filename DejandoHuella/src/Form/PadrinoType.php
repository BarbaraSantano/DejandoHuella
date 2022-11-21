<?php

namespace App\Form;

use App\Entity\Padrino;
use Doctrine\DBAL\Types\TextType;
use PhpParser\Node\Stmt\Label;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;


class PadrinoType extends AbstractType
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
            ->add('cantidad',ChoiceType::class, [
                'choices'  => [
                    'Huellita 5€' => '5€',
                    'Huella 10€' => '10€',
                    'Súper Huella 15€' => '15€',
                ],
            ] )
            ->add('iban' )
            // ->add('usuario')
            ->add('animals', null,  ['label'=> 'Mascota',])
            ->add('gatos', null,  ['label'=> 'Gatos',])
            ->add('perros', null,  ['label'=> 'Perros',])
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
            'data_class' => Padrino::class,
        ]);
    }
}
