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

class PadrinoType extends AbstractType
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
            ->add('cantidad',ChoiceType::class, [
                'choices'  => [
                    'Huellita 5€' => '5€',
                    'Huella 10€' => '10€',
                    'Súper Huella 15€' => '15€',
                ],
            ] )
            ->add('modalidad_pago',ChoiceType::class, [
                'choices'  => [
                    'Bizum' => 'bizum',
                    'Transferencia' => 'tranferencia',
                ],
            ] )
            // ->add('usuario')
            ->add('animals', null,  ['label'=> 'Mascota',])
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
