<?php

namespace App\Entity;

use App\Repository\GiteOptionsPrixRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GiteOptionsPrixRepository::class)]
class GiteOptionsPrix
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $Id_gite;

    #[ORM\Column(type: 'integer')]
    private $Id_option;

    #[ORM\Column(type: 'float')]
    private $prix;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdGite(): ?int
    {
        return $this->Id_gite;
    }

    public function setIdGite(int $Id_gite): self
    {
        $this->Id_gite = $Id_gite;

        return $this;
    }

    public function getIdOption(): ?int
    {
        return $this->Id_option;
    }

    public function setIdOption(int $Id_option): self
    {
        $this->Id_option = $Id_option;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }
}
