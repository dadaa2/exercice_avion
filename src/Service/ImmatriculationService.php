<?php

namespace App\Service;
use App\Entity\Avion;
use Doctrine\ORM\EntityManagerInterface;

class ImmatriculationService
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    // Génère une immatriculation aléatoire dans le format F-AAAA à F-ZZZZ
    public function generateImmatriculation(): string
    {
        $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        do {
            $randomLetters = '';
            for ($i = 0; $i < 4; $i++) {
                $randomLetters .= $letters[random_int(0, strlen($letters) - 1)];
            }

            $immatriculation = 'F-' . $randomLetters;

            // Vérifier si cette immatriculation existe déjà
            $existingAvion = $this->em->getRepository(Avion::class)->findOneBy(['immatriculation' => $immatriculation]);
        } while ($existingAvion !== null);

        return $immatriculation;
    }
}