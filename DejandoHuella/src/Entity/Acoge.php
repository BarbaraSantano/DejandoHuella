<?php

namespace App\Entity;

use App\Repository\AcogeRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AcogeRepository::class)]
class Acoge
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // #[ORM\OneToOne(mappedBy: 'acoge', cascade: ['persist', 'remove'])]
    // private ?Usuario $usuario = null;

    #[ORM\ManyToOne(inversedBy: 'acoge')]
    private ?Animal $animal = null;

    #[ORM\ManyToOne(inversedBy: 'acoge')]
    private ?Gato $gato = null;

    #[ORM\ManyToOne(inversedBy: 'acoge')]
    private ?Perro $perro = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $apellido = null;

    #[ORM\Column(length: 9)]
    #[Assert\Length(
        min: 9,
        max: 9,
        minMessage: 'El número de teléfono debe contener {{ 9 }} carácteres',
        maxMessage: 'El número de teléfono debe contener {{ 9 }}carácteres',
    )]
    private ?int $telefono = null;

    #[ORM\Column(length: 255)]
    private ?string $direccion = null;

    #[ORM\Column(type:"datetime", nullable: true)]
    private ?\DateTime  $fechaNacimiento = null;

    #[ORM\Column(length: 255)]
    private ?string $especie = null;

    #[ORM\Column(length: 255)]
    private ?string $etapa = null;

    #[ORM\Column(length: 255)]
    private ?string $tamano = null;

    #[ORM\Column(length: 255)]
    private ?string $sexo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function __toString() {
        return $this->getNombre();
    }

    public function getUsuario(): ?Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(?Usuario $usuario): self
    {
        // unset the owning side of the relation if necessary
        if ($usuario === null && $this->usuario !== null) {
            $this->usuario->setAcoge(null);
        }

        // set the owning side of the relation if necessary
        if ($usuario !== null && $usuario->getAcoge() !== $this) {
            $usuario->setAcoge($this);
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

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

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

    public function getApellido(): ?string
    {
        return $this->apellido;
    }

    public function setApellido(string $apellido): self
    {
        $this->apellido = $apellido;

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

    public function setFechaNacimiento(DateTime  $fechaNacimiento): self
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    public function getEspecie(): ?string
    {
        return $this->especie;
    }

    public function setEspecie(string $especie): self
    {
        $this->especie = $especie;

        return $this;
    }

    public function getEtapa(): ?string
    {
        return $this->etapa;
    }

    public function setEtapa(string $etapa): self
    {
        $this->etapa = $etapa;

        return $this;
    }

    public function getTamano(): ?string
    {
        return $this->tamano;
    }

    public function setTamano(string $tamano): self
    {
        $this->tamano = $tamano;

        return $this;
    }

    public function getSexo(): ?string
    {
        return $this->sexo;
    }

    public function setSexo(string $sexo): self
    {
        $this->sexo = $sexo;

        return $this;
    }

}