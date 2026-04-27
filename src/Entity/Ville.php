<?php

namespace App\Entity;

use App\Repository\VilleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VilleRepository::class)]
class Ville
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $codePostal = null;

    #[ORM\Column(length: 255)]
    private ?string $departement = null;

    #[ORM\Column]
    private ?float $prixMaisonM2 = null;

    #[ORM\Column]
    private ?float $prixAppartementM2 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(string $codePostal): static
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getDepartement(): ?string
    {
        return $this->departement;
    }

    public function setDepartement(string $departement): static
    {
        $this->departement = $departement;

        return $this;
    }

    public function getPrixMaisonM2(): ?float
    {
        return $this->prixMaisonM2;
    }

    public function setPrixMaisonM2(float $prixMaisonM2): static
    {
        $this->prixMaisonM2 = $prixMaisonM2;

        return $this;
    }

    public function getPrixAppartementM2(): ?float
    {
        return $this->prixAppartementM2;
    }

    public function setPrixAppartementM2(float $prixAppartementM2): static
    {
        $this->prixAppartementM2 = $prixAppartementM2;

        return $this;
    }
}
