<?php

namespace App\Form;

use App\Entity\Avion;
use App\Entity\Companies;
use App\Entity\Statues;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AvionSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        
            //->add("Immatriculation", TextType::class, [
            //        
            //])

            ->add('immatriculation', options:[
                'attr' => ['class' => 'form-control'],
                'required' => false,
            ])
            ->add('AvionCompanie', EntityType::class, [
                'class' => Companies::class,
                'choice_label' => 'companieNom',
                'attr' => ['class' => 'form-control'],
                'required' => false,
                'placeholder' => 'Toutes les compagnies',
            ])
            ->add('AvionStatue', EntityType::class, [
                'class' => Statues::class,
                'choice_label' => 'statueNom',
                'attr' => ['class' => 'form-control'],
                'required' => false,
                'placeholder' => 'Tout type de status',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Avion::class,
            'method' => 'GET',
        ]);
    }
}
