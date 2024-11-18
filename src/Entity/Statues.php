<?php

namespace App\Entity;

use App\Repository\StatuesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StatuesRepository::class)]
class Statues
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $statueNom = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatueNom(): ?string
    {
        return $this->statueNom;
    }

    public function setStatueNom(string $statueNom): static
    {
        $this->statueNom = $statueNom;

        return $this;
    }
}
