<?php

namespace App\Form;

use App\Entity\Avion;
use App\Entity\Companies;
use App\Entity\Statues;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AvionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('immatriculation', options:[
                'attr' => ['class' => 'form-control'],
            ])
            ->add('AvionCompanie', EntityType::class, [
                'class' => Companies::class,
                'choice_label' => 'companieNom',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('AvionStatue', EntityType::class, [
                'class' => Statues::class,
                'choice_label' => 'statueNom',
                'attr' => ['class' => 'form-control'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Avion::class,
        ]);
    }
}
