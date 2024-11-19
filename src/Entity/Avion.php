<?php

namespace App\Entity;

use App\Repository\AvionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvionRepository::class)]
class Avion
{
    #[ORM\Id]
    #[ORM\Column(type:"string", length:6, nullable:false, unique:true)]
    private ?string $immatriculation = null;

    #[ORM\ManyToOne]
    private ?Companies $AvionCompanie = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Statues $AvionStatue = null;

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(string $immatriculation): static
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    public function getAvionCompanie(): ?Companies
    {
        return $this->AvionCompanie;
    }

    public function setAvionCompanie(?Companies $AvionCompanie): static
    {
        $this->AvionCompanie = $AvionCompanie;

        return $this;
    }

    public function getAvionStatue(): ?Statues
    {
        return $this->AvionStatue;
    }

    public function setAvionStatue(?Statues $AvionStatue): static
    {
        $this->AvionStatue = $AvionStatue;

        return $this;
    }
}
