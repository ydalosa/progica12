<?php

namespace App\Entity;

use App\Repository\OptionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OptionRepository::class)]
#[ORM\Table(name: '`option`')]
class Option
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[ORM\Column(type: 'string', length: 255)]
    private $type;

    #[ORM\OneToMany(mappedBy: 'Gite_options_prix', targetEntity: Entite::class)]
    private $gite;

    public function __construct()
    {
        $this->gite = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection<int, Entite>
     */
    public function getGite(): Collection
    {
        return $this->gite;
    }

    public function addGite(Entite $gite): self
    {
        if (!$this->gite->contains($gite)) {
            $this->gite[] = $gite;
            $gite->setGiteOptionsPrix($this);
        }

        return $this;
    }

    public function removeGite(Entite $gite): self
    {
        if ($this->gite->removeElement($gite)) {
            // set the owning side to null (unless already changed)
            if ($gite->getGiteOptionsPrix() === $this) {
                $gite->setGiteOptionsPrix(null);
            }
        }

        return $this;
    }
}
