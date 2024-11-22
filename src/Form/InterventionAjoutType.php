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
use Symfony\Component\Translation\TranslatableMessage;

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
                'label' => TranslatableMessage("InterventionAddForm.DateDebut"),
                'attr' => ['class' => 'form-control'],
            ])
            ->add('InterventionDateFin', null, [
                'widget' => 'single_text',
                'required'=> true,
                'label' => t("InterventionAddForm.DateFin"),
                'attr' => ['class' => 'form-control'],
            ])
            
            ->add('InterventionType', EntityType::class, ['class' => TypeIntervention::class, 'choice_label' => 'typeInterventionNom',
                'label' => t("InterventionAddForm.Type"),
                'attr' => ['class' => 'form-control'],
            ])

            ->add('InterventionCommentaire', options:[
                'label' => t("InterventionAddForm.Commentaire"),
                'attr' => ['class' => 'form-control'],
                ])
            ->add('submit', SubmitType::class, options: [
                'label' => t("InterventionAddForm.Submit"),
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
