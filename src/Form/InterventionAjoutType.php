<?php

namespace App\Form;

use App\Entity\Avion;
use App\Entity\Intervention;
use App\Entity\TypeIntervention;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InterventionAjoutType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('InterventionDateCreation', null, [
            //     'widget' => 'single_text',
            // ])
            // ->add('avion', EntityType::class, [
            //     'class' => Avion::class,
            //     'choice_label' => 'immatriculation',
            // ])

            ->add('InterventionDateDebut', null, [
                'widget' => 'single_text',
            ])
            ->add('InterventionDateFin', null, [
                'widget' => 'single_text',
            ])
            
            ->add('InterventionType', EntityType::class, [
                'class' => TypeIntervention::class,
                'choice_label' => 'typeInterventionNom',
            ])
            ->add('InterventionCommentaire')


        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Intervention::class,
        ]);
    }
}
