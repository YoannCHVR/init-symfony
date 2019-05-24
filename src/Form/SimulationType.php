<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SimulationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // Lastname Field
            ->add('nbDayWork', ChoiceType::class, [
              'choices' => [
                  '300' => 320,
                  '250 - 300' => 275,
                  '200 - 250' => 225,
              ],
              'expanded' => true,
              'multiple' => false
            ])
            // Lastname Field
            ->add('workRotation', ChoiceType::class, [
              'choices' => [
                  '1 x 8h' => 1,
                  '2 x 8h' => 2,
                  '3 x 8h' => 3,
              ]
            ])
            // Lastname Field
            ->add('rateQuality', NumberType::class, [
              'attr' => [
                  'min' => 0,
                  'max' => 100
              ]
            ])
            // Lastname Field
            ->add('plannedDowntime', NumberType::class, [
              'attr' => [
                  'min' => 0
              ]
            ])
            // Lastname Field
            ->add('unplannedDowntime', NumberType::class, [
              'attr' => [
                  'min' => 0
              ]
            ])
            ->add('nominalCadence', RangeType::class, [
                'attr' => [
                    'min' => 0,
                    'max' => 50000
                ]
            ])
            ->add('realCadence', RangeType::class, [
                'attr' => [
                    'min' => 0,
                    'max' => 50000
                ]
            ])
            ->add('TauxDispo', HiddenType::class)
            ->add('TauxPerf', HiddenType::class)
            ->add('TauxQuality', HiddenType::class)
            ->add('AddedValue', HiddenType::class)
            ->add('PerteArrets', HiddenType::class)
            ->add('PertePerfs', HiddenType::class)
            ->add('PerteQuality', HiddenType::class)
            ->add('PerteInex', HiddenType::class)
            ->add('stack_bar_chart', HiddenType::class)
            ->add('dual_line_chart', HiddenType::class)
            ->add('dual_line_chart2', HiddenType::class)
            ->add('anonymeEmail', HiddenType::class)
            ->add('anonymeCompany', HiddenType::class, [
              'required' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
