<?php

namespace App\Form;

use App\Entity\Avion;
use App\Entity\Companies;
use App\Entity\Statues;
use Doctrine\DBAL\Types\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityManagerInterface;

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
    
    /*
    public function search($immatriculation, $companie, $statue, EntityManagerInterface $em): array
    {
        //$entityManager =  $this->getEntityManager();
        $dqlimmatriculation = "";
        $dqlcompanie = "";
        $dqlstatue = "";
        
        if($immatriculation == null) {
            return $dqlimmatriculation == '';
        }else{
            return $dqlimmatriculation = "WHERE a.immatriculation : LIKE %'$immatriculation'%";
    }
    if ($companie === "Toutes les compagnies") {
            return $dqlcompanie = '';
        }else{
            return $dqlcompanie = 'INNER JOIN a.immatriculation ON Companies = companies.nom';
    }
    if ($statue === "Tout type de status"){
        return $dqlstatue = '';
    } else {
        return $sqlstatue == 'INNER JOIN a.immatriculation ON Statues = Statues.nom';
}

$query = $em->createQuery(
    "SELECT *
    FROM App\Entity\Avion a
    immatriculation
    companie
    statue
    ")
    ->setParameter(['immatriculation', $immatriculation],
    ['companie', $dqlcompanie],
    ['status=e', $dtatue]);
    
    return $query->getResult();
}
*/
}
