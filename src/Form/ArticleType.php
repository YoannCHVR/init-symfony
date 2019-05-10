<?php

namespace App\Form;

use App\Entity\Article;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
            ->add('synopsis', TextType::class)
            // Content Text Field
            ->add('content', TextType::class, [
              'required' => false
            ])
            // File (attachment) Field
            ->add('File', FileType::class, [
              'required' => false,
              'data_class' => null
            ])
            //
            ->add('save', SubmitType::class, ['label' => 'Create Article'])
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
