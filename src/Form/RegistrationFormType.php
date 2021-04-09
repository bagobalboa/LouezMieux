<?php

namespace App\Form;

use App\Entity\User;
use phpDocumentor\Reflection\PseudoTypes\True_;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Email()
                ],
                'label' => 'Votre adresse mail: ',
                'required' => true
            ])

            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Les deux valeurs doivent correspondre',
                'options' => ['attr' => ['class' => 'form-password']],
                'required' => true,
                'first_options'  => ['label' => 'Votre mot de passe'],
                'second_options' => ['label' => 'Veuillez confirmer votre mot de passe'],                
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez renseigner un mot de passe valide',
                        ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe devrait contenir au moins 6 caractères',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'Propriétaire' => 'ROLE_PROPRIETAIRE',
                    'Locataire' => 'ROLE_LOCATAIRE',
                ],
                'placeholder' => false,
                'multiple' => true,
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'Merci de bien vouloir accepter les conditions générales d\'utilisation de notre service.',
                    ]),
                ],
            ])
        ->add('submit', SubmitType::class, [
            'label' => 'Envoyer'
        ]);
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}