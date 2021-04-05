<?php

namespace App\Form;

use App\Entity\Posting;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class PostingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('adresse', TextType::class)
            ->add('type', ChoiceType::class)
            ->add('meuble', ChoiceType::class)
            ->add('nombre_pieces', ChoiceType::class)
            ->add('superficie', DateType::class)
            ->add('loyer', NumberType::class)
            ->add('caution', NumberType::class)
            ->add('date_debut', DateType::class)
            ->add('duree_bail', NumberType::class)
            ->add('cave', ChoiceType::class)
            ->add('place_parking', ChoiceType::class)
            ->add('ascenseur', ChoiceType::class)
            ->add('gardien', ChoiceType::class)
            ->add('balcon', ChoiceType::class)
            ->add('cuisine_equipee', ChoiceType::class)
            ->add('toilette_separee', ChoiceType::class)
            ->add('photo1', FileType::class, [
                'data_class' => null,
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/gif',
                        ]
                    ])
                ]
            ])
            ->add('photo2', FileType::class,[
                'data_class' => null,
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/gif',
                        ]
                    ])
                ]
            ])
            ->add('photo3', FileType::class, [
                'data_class' => null,
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/gif',
                        ]
                    ])
                ]
            ])
            ->add('photo4', FileType::class,[
                'data_class' => null,
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/gif',
                        ]
                    ])
                ]
            ])
            ->add('photo5', FileType::class, [
                'data_class' => null,
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/gif',
                        ]
                    ])
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Créer l\'annonce',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Posting::class,
        ]);
    }
}
