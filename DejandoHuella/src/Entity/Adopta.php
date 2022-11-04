<?php

namespace App\Entity;

use App\Repository\AdoptaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdoptaRepository::class)]
class Adopta
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(mappedBy: 'adopta', cascade: ['persist', 'remove'])]
    private ?Usuario $usuario = null;

    #[ORM\ManyToOne(inversedBy: 'adopta')]
    private ?Animal $animal = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsuario(): ?Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuario $usuario): self
    {
        // unset the owning side of the relation if necessary
        if ($usuario === null && $this->usuario !== null) {
            $this->usuario->setAdopta(null);
        }

        // set the owning side of the relation if necessary
        if ($usuario !== null && $usuario->getAdopta() !== $this) {
            $usuario->setAdopta($this);
        }

        $this->usuario = $usuario;

        return $this;
    }

    public function getAnimal(): ?Animal
    {
        return $this->animal;
    }

    public function setAnimal(?Animal $animal): self
    {
        $this->animal = $animal;

        return $this;
    }
}
