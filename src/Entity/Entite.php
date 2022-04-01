<?php

namespace App\Entity;

use App\Repository\EntiteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EntiteRepository::class)]
class Entite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $user;

    #[ORM\Column(type: 'string', length: 255)]
    private $user_;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $gite;

    #[ORM\ManyToOne(targetEntity: gite::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $calendrierDisponibilite;

    #[ORM\Column(type: 'string', length: 255)]
    private $option_;

    #[ORM\ManyToOne(targetEntity: Option::class, inversedBy: 'gite')]
    private $Gite_options_prix;

    #[ORM\Column(type: 'string', length: 255)]
    private $contact;

    #[ORM\ManyToOne(targetEntity: User::class)]
    private $contactDisponibilite;

    #[ORM\ManyToOne(targetEntity: Contact::class)]
    private $ContactDisponibilite;

    #[ORM\OneToMany(mappedBy: 'entite', targetEntity: gite::class)]
    private $location;

    public function __construct()
    {
        $this->location = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(string $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getGite(): ?Users
    {
        return $this->gite;
    }

    public function setGite(?Users $gite): self
    {
        $this->gite = $gite;

        return $this;
    }

    public function getCalendrierDisponibilite(): ?gite
    {
        return $this->calendrierDisponibilite;
    }

    public function setCalendrierDisponibilite(?gite $calendrierDisponibilite): self
    {
        $this->calendrierDisponibilite = $calendrierDisponibilite;

        return $this;
    }

    public function getOption(): ?string
    {
        return $this->option_;
    }

    public function setOption(string $option_): self
    {
        $this->option_ = $option_;

        return $this;
    }

    public function getGiteOptionsPrix(): ?Option
    {
        return $this->Gite_options_prix;
    }

    public function setGiteOptionsPrix(?Option $Gite_options_prix): self
    {
        $this->Gite_options_prix = $Gite_options_prix;

        return $this;
    }

    public function getContact(): ?string
    {
        return $this->contact;
    }

    public function setContact(string $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    public function getContactDisponibilite(): ?Users
    {
        return $this->contactDisponibilite;
    }

    public function setContactDisponibilite(?Users $contactDisponibilite): self
    {
        $this->contactDisponibilite = $contactDisponibilite;

        return $this;
    }

    /**
     * @return Collection<int, gite>
     */
    public function getLocation(): Collection
    {
        return $this->location;
    }

    public function addLocation(gite $location): self
    {
        if (!$this->location->contains($location)) {
            $this->location[] = $location;
            $location->setEntite($this);
        }

        return $this;
    }

    public function removeLocation(gite $location): self
    {
        if ($this->location->removeElement($location)) {
            // set the owning side to null (unless already changed)
            if ($location->getEntite() === $this) {
                $location->setEntite(null);
            }
        }

        return $this;
    }
}
