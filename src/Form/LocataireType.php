<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LocataireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('email', EmailType::class, [
                'required' => true,
                'attr' => ['class' => 'form-email'],
        ])
        ->add('password', PasswordType::class, [
                'required' => true,
                'attr' => ['class' => 'form-password'],
        ])      
        ->add('prenom',  TextType::class, [
            'required' => true,
            'attr' => ['class' => 'form-prenom'],
        ])
        ->add('nom',  TextType::class, [
            'required' => true,
            'attr' => ['class' => 'form-nom'],
        ])
        ->add('dateDeNaissance', DateType::class, [
            'required' => true,
            'attr' => ['class' => 'form-dateNaissance'],
        ])
        ->add('adresse',  TextType::class, [
            'required' => true,
            'attr' => ['class' => 'form-adresse'],
        ])
        ->add('telephone', TelType::class, [
            'required' => true,
            'attr' => ['class' => 'form-telephone'],
        ])
        ->add('description',  TextType::class, [
            'required' => true,
            'attr' => ['class' => 'form-description'],
        ])
        ->add('isVerified')
        ->add('submit', SubmitType::class, [
            'label' => 'Envoyer'
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
