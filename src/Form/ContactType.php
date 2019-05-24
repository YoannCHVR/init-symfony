<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // Lastname Field
            ->add('lastname', TextType::class)
            // Firstname Field
            ->add('firstname', TextType::class, [
              'required' => false
            ])
            // Email Field
            ->add('email', EmailType::class, [
              'required' => false
            ])
            // Lastname Field
            ->add('company', TextType::class)
            // Lastname Field
            ->add('message', TextareaType::class)
            // Submit Field
            // ->add('send', SubmitType::class, ['label' => 'Envoyer'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
