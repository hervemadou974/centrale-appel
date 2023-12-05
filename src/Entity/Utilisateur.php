<?php
// Utilisateur.php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
class Utilisateur implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $username = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\ManyToOne(inversedBy: 'utilisateurs')]
    private ?Services $Services = null;

    #[ORM\OneToMany(mappedBy: 'agent', targetEntity: Centrale::class)]
    private Collection $centrales;

    #[ORM\Column(nullable: true)] // Permet à 'fonction' d'être nullable
    private ?bool $fonction = false;

    #[ORM\OneToMany(mappedBy: 'destinataire', targetEntity: Centrale::class)]
    private Collection $destinataire; // Par défaut à false si non spécifié

    public function __construct()
    {
        $this->centrales = new ArrayCollection();
        $this->destinataire = new ArrayCollection();
    }

    public function __ToString()
    {
        return $this->username." ".$this->Services;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->username;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getServices(): ?Services
    {
        return $this->Services;
    }

    public function setServices(?Services $Services): static
    {
        $this->Services = $Services;

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
            $centrale->setAgent($this);
        }

        return $this;
    }

    public function removeCentrale(Centrale $centrale): static
    {
        if ($this->centrales->removeElement($centrale)) {
            // set the owning side to null (unless already changed)
            if ($centrale->getAgent() === $this) {
                $centrale->setAgent(null);
            }
        }

        return $this;
    }

    public function isFonction(): ?bool
    {
        return $this->fonction;
    }

    public function setFonction(bool $fonction): static
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * @return Collection<int, Centrale>
     */
    public function getDestinataire(): Collection
    {
        return $this->destinataire;
    }

    public function addDestinataire(Centrale $destinataire): static
    {
        if (!$this->destinataire->contains($destinataire)) {
            $this->destinataire->add($destinataire);
            $destinataire->setDestinataire($this);
        }

        return $this;
    }

    public function removeDestinataire(Centrale $destinataire): static
    {
        if ($this->destinataire->removeElement($destinataire)) {
            // set the owning side to null (unless already changed)
            if ($destinataire->getDestinataire() === $this) {
                $destinataire->setDestinataire(null);
            }
        }

        return $this;
    }
}
