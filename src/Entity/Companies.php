<?php

namespace App\Entity;

use App\Repository\CompaniesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompaniesRepository::class)]
class Companies
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $companieNom = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompanieNom(): ?string
    {
        return $this->companieNom;
    }

    public function setCompanieNom(string $companieNom): static
    {
        $this->companieNom = $companieNom;

        return $this;
    }
}
