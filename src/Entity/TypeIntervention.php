<?php

namespace App\Entity;

use App\Repository\TypeInterventionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeInterventionRepository::class)]
class TypeIntervention
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $typeInterventionNom = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeInterventionNom(): ?string
    {
        return $this->typeInterventionNom;
    }

    public function setTypeInterventionNom(string $typeInterventionNom): static
    {
        $this->typeInterventionNom = $typeInterventionNom;

        return $this;
    }
}
