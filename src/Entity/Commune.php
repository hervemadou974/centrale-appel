<?php

namespace App\Entity;

use App\Repository\CommuneRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommuneRepository::class)]
class Commune
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $code_postale = null;

    #[ORM\Column(length: 100)]
    private ?string $nom_commune = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodePostale(): ?int
    {
        return $this->code_postale;
    }

    public function setCodePostale(int $code_postale): static
    {
        $this->code_postale = $code_postale;

        return $this;
    }

    public function getNomCommune(): ?string
    {
        return $this->nom_commune;
    }

    public function setNomCommune(string $nom_commune): static
    {
        $this->nom_commune = $nom_commune;

        return $this;
    }
}
