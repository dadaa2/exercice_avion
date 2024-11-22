<?php

namespace App\Form;

use App\Entity\Avion;
use App\Entity\Intervention;
use App\Entity\TypeIntervention;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\SubmitButton;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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
                'required'=> true,
                'label' => "Date du début de l'intervention",
                'attr' => ['class' => 'form-control'],
            ])
            ->add('InterventionDateFin', null, [
                'widget' => 'single_text',
                'required'=> true,
                'label' => "Date de fin de l'intervention",
                'attr' => ['class' => 'form-control'],
            ])
            
            ->add('InterventionType', EntityType::class, ['class' => TypeIntervention::class, 'choice_label' => 'typeInterventionNom',
                'label' => "Type d'intervention à affecter ",
                'attr' => ['class' => 'form-control'],
            ])

            ->add('InterventionCommentaire', options:[
                'label' => "Commentaire de l'intervention ",
                'attr' => ['class' => 'form-control'],
                ])
            ->add('submit', SubmitType::class, options: [
                'label' => "Ajouter l'intervention",
                'attr' => ['class' => 'btn btn-primary'],
                ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Intervention::class,
        ]);
    }
}
