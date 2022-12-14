<?php

namespace App\Form;

use App\Entity\Gato;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GatoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre')
            ->add('fechaNacimiento', null, ['label'=> 'Fecha de nacimiento (YYYY-MM-DD)'] )
            ->add('sexo', ChoiceType::class, [
                'choices'  => [
                    'Hembra' => 'Hembra',
                    'Macho' => 'Macho',
                ]])
            ->add('raza')
            ->add('esterilizado')
            ->add('test', null,  ['label'=> 'Test de Leucemia e Inmunodeficiencia'])
            ->add('edad')
            ->add('tamano' ,ChoiceType::class, [
                'label' => "Tamaño",
                'choices'  => [
                    'Pequeño' => 'pequeno',
                    'Mediano' => 'mediano',
                    'Grande' => 'grande',
                ],
            ] )
            ->add('descripcion', null,  ['label'=> 'Descripción'])
            ->add('imagen')
            // ->add('padrino')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Gato::class,
        ]);
    }
}
