<?php

namespace App\Form;

use App\Entity\Posting;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('adresse')
            ->add('type')
            ->add('meuble')
            ->add('nombre_pieces')
            ->add('superficie')
            ->add('loyer')
            ->add('caution')
            ->add('date_debut')
            ->add('duree_bail')
            ->add('cave')
            ->add('place_parking')
            ->add('ascenseur')
            ->add('gardien')
            ->add('balcon')
            ->add('cuisine_equipee')
            ->add('toilette_separee')
            ->add('photo1')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Posting::class,
        ]);
    }
}
