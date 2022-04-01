<?php

namespace App\Entity;

use App\Repository\GiteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GiteRepository::class)]
class Gite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $titre;

    #[ORM\Column(type: 'string', length: 255)]
    private $description;

    #[ORM\Column(type: 'string', length: 255)]
    private $images;

    #[ORM\Column(type: 'boolean')]
    private $animaux;

    #[ORM\Column(type: 'integer')]
    private $animaux_prix;

    #[ORM\Column(type: 'integer')]
    private $TarifHauteSaison;

    #[ORM\Column(type: 'integer')]
    private $TarifBasseSaison;

    #[ORM\Column(type: 'string', length: 255)]
    private $location;

    #[ORM\Column(type: 'float')]
    private $surface;

    #[ORM\Column(type: 'integer')]
    private $nombreCouchage;

    #[ORM\Column(type: 'integer')]
    private $nombreChambre;

    #[ORM\Column(type: 'integer')]
    private $Contact_id;

    #[ORM\ManyToOne(targetEntity: Entite::class, inversedBy: 'location')]
    private $entite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImages(): ?string
    {
        return $this->images;
    }

    public function setImages(string $images): self
    {
        $this->images = $images;

        return $this;
    }

    public function getAnimaux(): ?bool
    {
        return $this->animaux;
    }

    public function setAnimaux(bool $animaux): self
    {
        $this->animaux = $animaux;

        return $this;
    }

    public function getAnimauxPrix(): ?int
    {
        return $this->animaux_prix;
    }

    public function setAnimauxPrix(int $animaux_prix): self
    {
        $this->animaux_prix = $animaux_prix;

        return $this;
    }

    public function getTarifHauteSaison(): ?int
    {
        return $this->TarifHauteSaison;
    }

    public function setTarifHauteSaison(int $TarifHauteSaison): self
    {
        $this->TarifHauteSaison = $TarifHauteSaison;

        return $this;
    }

    public function getTarifBasseSaison(): ?int
    {
        return $this->TarifBasseSaison;
    }

    public function setTarifBasseSaison(int $TarifBasseSaison): self
    {
        $this->TarifBasseSaison = $TarifBasseSaison;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getSurface(): ?float
    {
        return $this->surface;
    }

    public function setSurface(float $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function getNombreCouchage(): ?int
    {
        return $this->nombreCouchage;
    }

    public function setNombreCouchage(int $nombreCouchage): self
    {
        $this->nombreCouchage = $nombreCouchage;

        return $this;
    }

    public function getNombreChambre(): ?int
    {
        return $this->nombreChambre;
    }

    public function setNombreChambre(int $nombreChambre): self
    {
        $this->nombreChambre = $nombreChambre;

        return $this;
    }

    public function getContactId(): ?int
    {
        return $this->Contact_id;
    }

    public function setContactId(int $Contact_id): self
    {
        $this->Contact_id = $Contact_id;

        return $this;
    }

    public function getEntite(): ?Entite
    {
        return $this->entite;
    }

    public function setEntite(?Entite $entite): self
    {
        $this->entite = $entite;

        return $this;
    }
}
