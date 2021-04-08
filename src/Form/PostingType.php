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
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class PostingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class, [
                'required' => true,
                'attr' => ['class' => 'form-titre'],
            ])
            ->add('adresse', TextType::class, [
                'required' => true,
                'attr' => ['class' => 'form-adresse'],
            ])
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Maison' => 'maison',
                    'Appartement' => 'appartement',
                ],
                'required' => true,
                'attr' => ['class' => 'form-type'],
            ])
            ->add('meuble', ChoiceType::class, [
                'choices' => [
                    'Meublé' => true,
                    'Non meublé' => false,
                ],
                'required' => true,
                'attr' => ['class' => 'form-meuble'],
            ])
            ->add('nombre_pieces', ChoiceType::class, [
                'choices' => [
                    1 => 1,
                    2 => 2,
                    3 => 3,
                    4 => 4,
                    5 => 5,
                ],
                'required' => true,
                'attr' => ['class' => 'form-pieces'],
            ])
            ->add('superficie', NumberType::class, [
                'required' => true,
                'attr' => ['class' => 'form-superficie'],
            ])
            ->add('loyer', NumberType::class, [
                'required' => true,
                'attr' => ['class' => 'form-loyer'],
            ])
            ->add('caution', NumberType::class,  [
                'required' => true,
                'attr' => ['class' => 'form-caution'],
            ])
            ->add('date_debut', DateType::class,  [
                'required' => true,
                'attr' => ['class' => 'form-date-debut'],
            ])
            ->add('duree_bail', ChoiceType::class, [
                'choices' => [
                    1 => 1,
                    2 => 2,
                    3 => 3,
                    4 => 4,
                    5 => 5,
                    6 => 6,
                    7 => 7,
                    8 => 8,
                    9 => 9,
                    10 => 10,
                    11 => 11,
                    12 => 12,
                    13 => 13,
                    14 => 14,
                    15 => 15,
                    16 => 16,
                    17 => 17,
                    18 => 18,
                    19 => 19,
                    20 => 20,
                    21 => 21,
                    22 => 22,
                    23 => 23,
                    24 => 24,

                ],
                'required' => true,
                'attr' => ['class' => 'form-duree-bail'],
            ])
            ->add('cave', ChoiceType::class, [
                'choices' => [
                    'Oui' => true,
                    'Non' => false,
                ],
                'required' => true,
                'attr' => ['class' => 'form-cave'],
            ])
            ->add('place_parking', ChoiceType::class,  [
                'choices' => [
                    'Oui' => true,
                    'Non' => false,
                ],
                'required' => true,
                'attr' => ['class' => 'form-parking'],
            ])
            ->add('ascenseur', ChoiceType::class,  [
                'choices' => [
                    'Oui' => true,
                    'Non' => false,
                ],
                'required' => true,
                'attr' => ['class' => 'form-ascenseur'],
            ])
            ->add('gardien', ChoiceType::class,  [
                'choices' => [
                    'Oui' => true,
                    'Non' => false,
                ],
                'required' => true,
                'attr' => ['class' => 'form-gardien'],
            ])
            ->add('balcon', ChoiceType::class,  [
                'choices' => [
                    'Oui' => true,
                    'Non' => false,
                ],
                'required' => true,
                'attr' => ['class' => 'form-balcon'],
            ])
            ->add('cuisine_equipee', ChoiceType::class,  [
                'choices' => [
                    'Oui' => true,
                    'Non' => false,
                ],
                'required' => true,
                'attr' => ['class' => 'form-cuisine'],
            ])
            ->add('toilette_separee', ChoiceType::class,  [
                'choices' => [
                    'Oui' => true,
                    'Non' => false,
                ],
                'required' => true,
                'attr' => ['class' => 'form-toilette'],
            ])
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
                ],
                'required' => true,
                'attr' => ['class' => 'form-photo'],
            ])
            ->add('photo2', FileType::class, [
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
                ],
                'required' => true,
                'attr' => ['class' => 'form-photo'],
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
                ],
                'required' => true,
                'attr' => ['class' => 'form-photo'],
            ])
            ->add('photo4', FileType::class, [
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
                ],
                'required' => true,
                'attr' => ['class' => 'form-photo'],
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
                ],
                'required' => true,
                'attr' => ['class' => 'form-photo'],
            ])
            ->add('description', TextareaType::class, [
                'required' => true,
                'attr' => ['class' => 'form-description'],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Créer l\'annonce',
                'attr' => ['class' => 'form-submit'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Posting::class,
        ]);
    }
}
