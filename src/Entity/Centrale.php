<?php

namespace App\Entity;

use App\Repository\CentraleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CentraleRepository::class)]
class Centrale
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_heure = null;

    #[ORM\ManyToOne(inversedBy: 'centrales')]
    private ?Utilisateur $agent = null;

    #[ORM\Column(length: 80)]
    private ?string $administre_appellant = null;

    #[ORM\Column(length: 80)]
    private ?string $prenom_administre = null;

    #[ORM\Column(length: 60)]
    private ?string $objet = null;

    #[ORM\Column]
    private ?float $telephone = null;

    #[ORM\Column(length: 155, nullable: true)]
    private ?string $mail = null;

    #[ORM\Column]
    private ?bool $status = null;

    #[ORM\ManyToOne(inversedBy: 'centrales')]
    private ?Commune $commune = null;

    #[ORM\ManyToOne(inversedBy: 'destinataire')]
    private ?Utilisateur $destinataire = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateHeure(): ?\DateTimeInterface
    {
        return $this->date_heure;
    }

    public function setDateHeure(\DateTimeInterface $date_heure): static
    {
        $this->date_heure = $date_heure;

        return $this;
    }

    public function getAgent(): ?Utilisateur
    {
        return $this->agent;
    }

    public function setAgent(?Utilisateur $agent): static
    {
        $this->agent = $agent;

        return $this;
    }

    public function getAdministreAppellant(): ?string
    {
        return $this->administre_appellant;
    }

    public function setAdministreAppellant(string $administre_appellant): static
    {
        $this->administre_appellant = $administre_appellant;

        return $this;
    }

    public function getPrenomAdministre(): ?string
    {
        return $this->prenom_administre;
    }

    public function setPrenomAdministre(string $prenom_administre): static
    {
        $this->prenom_administre = $prenom_administre;

        return $this;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(string $objet): static
    {
        $this->objet = $objet;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): static
    {
        $this->mail = $mail;

        return $this;
    }

    public function isStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getCommune(): ?Commune
    {
        return $this->commune;
    }

    public function setCommune(?Commune $commune): static
    {
        $this->commune = $commune;

        return $this;
    }

    public function getDestinataire(): ?Utilisateur
    {
        return $this->destinataire;
    }

    public function setDestinataire(?Utilisateur $destinataire): static
    {
        $this->destinataire = $destinataire;

        return $this;
    }
}
