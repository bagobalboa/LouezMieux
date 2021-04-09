<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\EmailValidator;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class,  [
                'required' => true,
                'attr' => ['class' => 'form-email'],
            ])
            ->add('password', PasswordType::class, [
                'required' => true,
                'attr' => ['class' => 'form-titre'],
            ])
            ->add('prenom')
            ->add('nom')
            ->add('dateDeNaissance')
            ->add('description')
            ->add('isVerified')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}