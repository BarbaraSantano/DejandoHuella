<?php

namespace App\Entity;

use App\Repository\PadrinoRepository;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PadrinoRepository::class)]
class Padrino
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?string $cantidad = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $modalidad_pago = null;

    #[ORM\OneToOne(mappedBy: 'padrino', cascade: ['persist', 'remove'])]
    private ?Usuario $usuario = null;

    #[ORM\ManyToMany(targetEntity: Animal::class, mappedBy: 'padrino')]
    private Collection $animals;

    #[ORM\ManyToMany(targetEntity: Gato::class, mappedBy: 'padrino')]
    private Collection $gatos;

    #[ORM\ManyToMany(targetEntity: Perro::class, mappedBy: 'padrino')]
    private Collection $perros;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $apellido = null;

    #[ORM\Column(length: 255)]
    #[Assert\Email()]
    private ?string $email = null;

    #[ORM\Column(length: 9)]
    #[Assert\Length(
        min: 9,
        max: 9,
        minMessage: 'Your first name must be at least {{ limit }} characters long',
        maxMessage: 'Your first name cannot be longer than {{ limit }} characters',
    )]
    private ?int $telefono = null;

    #[ORM\Column(length: 255)]
    private ?string $direccion = null;

    #[ORM\Column(type:"datetime", nullable: true)]
    private ?\DateTime $fechaNacimiento = null;

    #[ORM\Column(length: 255)]
    #[Assert\Iban(
        message: 'Este no es un número válido de cuenta bancaria internacional.(IBAN).',
    )]
    private ?string $iban = null;

    public function __construct()
    {
        $this->animals = new ArrayCollection();
        $this->gatos = new ArrayCollection();
        $this->perros = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function __toString() 
    {
        return $this->getNombre();
    }

    public function getCantidad(): ?string
    {
        return $this->cantidad;
    }

    public function setCantidad(string $cantidad): self
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

    public function getGato(): ?Gato
    {
        return $this->gato;
    }

    public function setGato(?Gato $gato): self
    {
        $this->gato = $gato;

        return $this;
    }

    public function getPerro(): ?Perro
    {
        return $this->perro;
    }

    public function setPerro(?Perro $perro): self
    {
        $this->perro = $perro;

        return $this;
    }
    /**
     * @return Collection<int, Gato>
     */
    public function getGatos(): Collection
    {
        return $this->gatos;
    }

        /**
     * @return Collection<int, Perro>
     */
    public function getPerros(): Collection
    {
        return $this->perros;
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

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido(): ?string
    {
        return $this->apellido;
    }

    public function setApellido(string $apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelefono(): ?int
    {
        return $this->telefono;
    }

    public function setTelefono(int $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getFechaNacimiento(): ?string
    {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento(DateTime $fechaNacimiento): self
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    public function getIban(): ?string
    {
        return $this->iban;
    }

    public function setIban(string $iban): self
    {
        $this->iban = $iban;

        return $this;
    }
}
