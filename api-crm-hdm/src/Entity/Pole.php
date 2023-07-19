<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\PoleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PoleRepository::class)]
#[ApiResource]
class Pole
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $namePole = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNamePole(): ?string
    {
        return $this->namePole;
    }

    public function setNamePole(string $namePole): self
    {
        $this->namePole = $namePole;

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
}
