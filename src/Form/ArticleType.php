<?php

namespace App\Form;

use App\Entity\Article;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // Builder New Article Form
        $builder
            // Title Field
            ->add('title', TextType::class, [
              'required' => true
            ])
            // Synopsis Field
            ->add('content', TextareaType::class, [
              'required' => true
            ])
            // Content Text Field
            ->add('moreContent', TextareaType::class, [
              'required' => false
            ])
            // Title Field
            ->add('titleEN', TextType::class, [
              'required' => true
            ])
            // Synopsis Field
            ->add('contentEN', TextareaType::class, [
              'required' => true
            ])
            // Content Text Field
            ->add('moreContentEN', TextareaType::class, [
              'required' => false
            ])
            // Image Field
             ->add('image', FileType::class, [
               'required' => false,
               'data_class' => null
             ])
            // File (attachment) Field
            ->add('file', FileType::class, [
              'required' => false,
              'data_class' => null
            ])
            ->add('priority', ChoiceType::class, [
              'choices'  => [
                  'Ne pas classer' => NULL,
                  'Position 1' => 1,
                  'Position 2' => 2,
                  'Position 3' => 3,
              ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
            'data_class' => Article::class,
        ]);
    }
}
