<?php

namespace App\Entity;

use App\Repository\CommuneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\OneToMany(mappedBy: 'commune', targetEntity: Centrale::class)]
    private Collection $centrales;

    public function __construct()
    {
        $this->centrales = new ArrayCollection();
    }
    public function __toString()
    {
        return $this->nom_commune.' '.$this->code_postale;
    }
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

    /**
     * @return Collection<int, Centrale>
     */
    public function getCentrales(): Collection
    {
        return $this->centrales;
    }

    public function addCentrale(Centrale $centrale): static
    {
        if (!$this->centrales->contains($centrale)) {
            $this->centrales->add($centrale);
            $centrale->setCommune($this);
        }

        return $this;
    }

    public function removeCentrale(Centrale $centrale): static
    {
        if ($this->centrales->removeElement($centrale)) {
            // set the owning side to null (unless already changed)
            if ($centrale->getCommune() === $this) {
                $centrale->setCommune(null);
            }
        }

        return $this;
    }
}
