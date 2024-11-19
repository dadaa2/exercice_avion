<?php

namespace App\DataFixtures;

use App\Entity\Companies;
use App\Entity\Statues;
use App\Entity\TypeIntervention;
use App\Repository\AvionRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $statues = [
            (new Statues())->setStatueNom("En attente"),
            (new Statues())->setStatueNom("En vol"),
            (new Statues())->setStatueNom("En maintenance")
        ];
      
        $companies = [
            (new Companies())->setCompanieNom("Air France"),
            (new Companies())->setCompanieNom("British Airways"),
            (new Companies())->setCompanieNom("Qatar Airways")
        ];


        $typeInterventions = [
        (new TypeIntervention())-> setTypeInterventionNom("Inspection général"),
        (new TypeIntervention())-> setTypeInterventionNom("Maintenance régulière"),
        (new TypeIntervention())-> setTypeInterventionNom("Maintenance en profondeur"),
        ];

        $entities = array_merge($statues, $companies, $typeInterventions);

        foreach ($entities as $entity) {
            $manager->persist($entity);
        }
        $manager->flush();
        // $product = new Product();
        // $manager->persist($product);
    }
}
