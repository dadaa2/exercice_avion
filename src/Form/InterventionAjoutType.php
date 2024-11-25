<?php

namespace App\Form;

use App\Entity\Avion;
use App\Entity\Intervention;
use App\Entity\TypeIntervention;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

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
                //'label' => trans("InterventionAddForm.DateDebut"),
                'label' => "AddInterventionForm.Start",
                'attr' => ['class' => 'form-control'],
            ])
            ->add('InterventionDateFin', null, [
                'widget' => 'single_text',
                'required'=> true,
                //'label' => t("InterventionAddForm.DateFin"),
                'label' => "AddInterventionForm.End",
                'attr' => ['class' => 'form-control'],
            ])
            
            ->add('InterventionType', EntityType::class, [
                'class' => TypeIntervention::class, 'choice_label' => 'typeInterventionNom',
                //'label' => t("InterventionAddForm.Type"),
                'label' => "AddInterventionForm.Type",
                'attr' => ['class' => 'form-control'],
            ])

            ->add('InterventionCommentaire', options:[
                //'label' => t("InterventionAddForm.Commentaire"),
                'label' => "AddInterventionForm.Commentary",
                'attr' => ['class' => 'form-control'],
                ])
            ->add('submit', SubmitType::class, options: [
                //'label' => t("InterventionAddForm.Submit"),
                'label' => "AddInterventionForm.Submit",
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
