<?php

namespace App\Entity;

use App\Repository\PadrinoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PadrinoRepository::class)]
class Padrino
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $cantidad = null;

    #[ORM\Column(length: 255)]
    private ?string $modalidad_pago = null;

    #[ORM\OneToOne(mappedBy: 'padrino', cascade: ['persist', 'remove'])]
    private ?Usuario $usuario = null;

    #[ORM\ManyToMany(targetEntity: Animal::class, mappedBy: 'padrino')]
    private Collection $animals;

    public function __construct()
    {
        $this->animals = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCantidad(): ?int
    {
        return $this->cantidad;
    }

    public function setCantidad(int $cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function getModalidadPago(): ?string
    {
        return $this->modalidad_pago;
    }

    public function setModalidadPago(string $modalidad_pago): self
    {
        $this->modalidad_pago = $modalidad_pago;

        return $this;
    }

    public function getUsuario(): ?Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuario $usuario): self
    {
        // unset the owning side of the relation if necessary
        if ($usuario === null && $this->usuario !== null) {
            $this->usuario->setPadrino(null);
        }

        // set the owning side of the relation if necessary
        if ($usuario !== null && $usuario->getPadrino() !== $this) {
            $usuario->setPadrino($this);
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

    /**
     * @return Collection<int, Animal>
     */
    public function getAnimals(): Collection
    {
        return $this->animals;
    }

    public function addAnimal(Animal $animal): self
    {
        if (!$this->animals->contains($animal)) {
            $this->animals->add($animal);
            $animal->addPadrino($this);
        }

        return $this;
    }

    public function removeAnimal(Animal $animal): self
    {
        if ($this->animals->removeElement($animal)) {
            $animal->removePadrino($this);
        }

        return $this;
    }
}
