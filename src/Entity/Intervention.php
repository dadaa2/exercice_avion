<?php

namespace App\Entity;

use App\Repository\InterventionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Avion;

#[ORM\Entity(repositoryClass: InterventionRepository::class)]
class Intervention
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Avion::class)]
    #[ORM\JoinColumn(name: 'avion_immatriculation', referencedColumnName: 'immatriculation', nullable: false)]
    private Avion $avion;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?TypeIntervention $InterventionType = null;

    #[ORM\Column(length: 1024, nullable: true)]
    private ?string $InterventionCommentaire = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $InterventionDateCreation = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $InterventionDateDebut = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $InterventionDateFin = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAvion(): Avion
    {
        return $this->avion;
    }

    public function setInterventionAvion(Avion $avion): self
    {
        $this->avion = $avion;

        return $this;
    }

    public function getInterventionType(): ?TypeIntervention
    {
        return $this->InterventionType;
    }

    public function setInterventionType(?TypeIntervention $InterventionType): static
    {
        $this->InterventionType = $InterventionType;

        return $this;
    }

    public function getInterventionCommentaire(): ?string
    {
        return $this->InterventionCommentaire;
    }

    public function setInterventionCommentaire(?string $InterventionCommentaire): static
    {
        $this->InterventionCommentaire = $InterventionCommentaire;

        return $this;
    }

    public function getInterventionDateCreation(): ?\DateTimeInterface
    {
        return $this->InterventionDateCreation;
    }

    public function setInterventionDateCreation(\DateTimeInterface $InterventionDateCreation): static
    {
        $this->InterventionDateCreation = $InterventionDateCreation;

        return $this;
    }

    public function getInterventionDateDebut(): ?\DateTimeInterface
    {
        return $this->InterventionDateDebut;
    }

    public function setInterventionDateDebut(\DateTimeInterface $InterventionDateDebut): static
    {
        $this->InterventionDateDebut = $InterventionDateDebut;

        return $this;
    }

    public function getInterventionDateFin(): ?\DateTimeInterface
    {
        return $this->InterventionDateFin;
    }

    public function setInterventionDateFin(\DateTimeInterface $InterventionDateFin): static
    {
        $this->InterventionDateFin = $InterventionDateFin;

        return $this;
    }
}
