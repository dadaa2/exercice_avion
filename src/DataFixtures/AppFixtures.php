<?php

namespace App\DataFixtures;

use App\Entity\Companies;
use App\Entity\Statues;
use App\Entity\TypeIntervention;
use App\Entity\Avion;
use App\Entity\Intervention;
use App\Service\ImmatriculationService;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    private ImmatriculationService $immatriculationService;
    public function __construct(ImmatriculationService $immatriculationService)
    {
        $this->immatriculationService = $immatriculationService;
    }

    private function generateRandomDate($startYear = 2022, $endYear = 2024)
    {
        $startTimestamp = strtotime("$startYear-01-01");
        $endTimestamp = strtotime("$endYear-12-31");

        $randomTimestamp = rand($startTimestamp, $endTimestamp);
        return new \DateTime('@' . $randomTimestamp); // Retourner une instance DateTime
    }

    public function load(ObjectManager $manager): void
    {
        $statues = [
            (new Statues())->setStatueNom("En attente"),
            (new Statues())->setStatueNom("En vol"),
            (new Statues())->setStatueNom("En maintenance"),
        ];

        $companies = [
            (new Companies())->setCompanieNom("Air France"),
            (new Companies())->setCompanieNom("British Airways"),
            (new Companies())->setCompanieNom("Qatar Airways"),
        ];

        $typeInterventions = [
            (new TypeIntervention())->setTypeInterventionNom("Inspection général"),
            (new TypeIntervention())->setTypeInterventionNom("Maintenance hebdomadaire régulière"),
            (new TypeIntervention())->setTypeInterventionNom("Maintenance en profondeur"),
            (new TypeIntervention())->setTypeInterventionNom("Réparation"),
        ];

        $listeIntervention = [];
        $avions = [];
        //Générer un nombre avion
        for ($i = 0; $i < 200; $i++) {
            $immatriculation = $this->immatriculationService->generateImmatriculation();
            if (array_key_exists($immatriculation, $avions)) {
                continue; // Passer à la prochaine génération
            }
            
            do {
                $immatriculation = $this->immatriculationService->generateImmatriculation();
            } while (array_key_exists($immatriculation, $avions));

            ##Boucle qui génére, check dans bdd et dans le tableau de la creation
            #do {
            #    $existingAvion = $manager->getRepository(Avion::class)->findOneBy(['immatriculation' => $immatriculation]);
            #    $isDuplicate = $existingAvion !== null || in_array($immatriculation, $checkImmatriculation);
            #} while ($isDuplicate);
            #  
            #$checkImmatriculation[] = $immatriculation;

            $avion = (new Avion())
                ->setImmatriculation($immatriculation)
                ->setAvionCompanie($companies[rand(0, count($companies) - 1)])
                ->setAvionStatue($statues[rand(0, count($statues) - 1)]);
                $avions[$immatriculation] = $avion; // Ajoute l'avion dans le tableau


            $siIntervention = rand(0, 1);
            if ($siIntervention == 1) {
                $dateDebut = $this->generateRandomDate(2022, 2024);
                $dateFin = (clone $dateDebut)->modify('+1 hour');
                $dateCreation = $this->generateRandomDate(2022, 2024);
                
                $intervention = (new Intervention())
                    ->setInterventionAvion($avion)
                    ->setInterventionType($typeInterventions[rand(0, count($typeInterventions) - 1)])
                    ->setInterventionDateDebut($dateDebut)
                    ->setInterventionDateFin($dateFin)
                    ->setInterventionCommentaire("")
                    ->setInterventionDateCreation($dateCreation);
                $listeIntervention[] = $intervention;
            }
        }

        $entities = array_merge($statues, $companies, $typeInterventions, $avions, $listeIntervention);
        foreach ($entities as $entity) {
            $manager->persist($entity);
        }
        $manager->flush();
    }
}
