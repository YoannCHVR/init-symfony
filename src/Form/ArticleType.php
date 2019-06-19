<?php

namespace App\Form;

use App\Entity\Article;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
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
            // Image Field
             ->add('image', FileType::class, [
               'required' => false,
               'data_class' => null
             ])
            // Title Field
            ->add('title', TextType::class)
            // Synopsis Field
            ->add('synopsis', TextareaType::class)
            // Content Text Field
            ->add('content', TextareaType::class, [
              'required' => false
            ])
            // File (attachment) Field
            ->add('file', FileType::class, [
              'required' => false,
              'data_class' => null
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
