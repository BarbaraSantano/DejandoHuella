<?php

namespace App\Entity;

use App\Repository\AnimalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnimalRepository::class)]
class Animal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $fecha_nacimiento = null;

    #[ORM\Column(length: 255)]
    private ?string $sexo = null;

    #[ORM\Column(length: 255)]
    private ?string $especie = null;

    #[ORM\Column(length: 255)]
    private ?string $raza = null;

    #[ORM\Column]
    private ?bool $esterilizado = null;

    #[ORM\Column]
    private ?bool $test = null;

    #[ORM\Column(length: 255)]
    private ?string $edad = null;

    #[ORM\Column(length: 255)]
    private ?string $tamano = null;

    #[ORM\Column(length: 1500)]
    private ?string $descripcion = null;

    #[ORM\OneToMany(mappedBy: 'animal', targetEntity: Acoge::class)]
    private Collection $acoge;

    #[ORM\OneToMany(mappedBy: 'animal', targetEntity: Adopta::class)]
    private Collection $adopta;

    #[ORM\ManyToMany(targetEntity: Padrino::class, inversedBy: 'animals')]
    private Collection $padrino;

    public function __construct()
    {
        $this->acoge = new ArrayCollection();
        $this->adopta = new ArrayCollection();
        $this->padrino = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getFechaNacimiento(): ?string
    {
        return $this->fecha_nacimiento;
    }

    public function setFechaNacimiento(string $fecha_nacimiento): self
    {
        $this->fecha_nacimiento = $fecha_nacimiento;

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

    public function getEspecie(): ?string
    {
        return $this->especie;
    }

    public function setEspecie(string $especie): self
    {
        $this->especie = $especie;

        return $this;
    }

    public function getRaza(): ?string
    {
        return $this->raza;
    }

    public function setRaza(string $raza): self
    {
        $this->raza = $raza;

        return $this;
    }

    public function isEsterilizado(): ?bool
    {
        return $this->esterilizado;
    }

    public function setEsterilizado(bool $esterilizado): self
    {
        $this->esterilizado = $esterilizado;

        return $this;
    }

    public function isTest(): ?bool
    {
        return $this->test;
    }

    public function setTest(bool $test): self
    {
        $this->test = $test;

        return $this;
    }

    public function getEdad(): ?string
    {
        return $this->edad;
    }

    public function setEdad(string $edad): self
    {
        $this->edad = $edad;

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

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * @return Collection<int, Acoge>
     */
    public function getAcoge(): Collection
    {
        return $this->acoge;
    }

    public function addAcoge(Acoge $acoge): self
    {
        if (!$this->acoge->contains($acoge)) {
            $this->acoge->add($acoge);
            $acoge->setAnimal($this);
        }

        return $this;
    }

    public function removeAcoge(Acoge $acoge): self
    {
        if ($this->acoge->removeElement($acoge)) {
            // set the owning side to null (unless already changed)
            if ($acoge->getAnimal() === $this) {
                $acoge->setAnimal(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Adopta>
     */
    public function getAdopta(): Collection
    {
        return $this->adopta;
    }

    public function addAdoptum(Adopta $adoptum): self
    {
        if (!$this->adopta->contains($adoptum)) {
            $this->adopta->add($adoptum);
            $adoptum->setAnimal($this);
        }

        return $this;
    }

    public function removeAdoptum(Adopta $adoptum): self
    {
        if ($this->adopta->removeElement($adoptum)) {
            // set the owning side to null (unless already changed)
            if ($adoptum->getAnimal() === $this) {
                $adoptum->setAnimal(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Padrino>
     */
    public function getPadrino(): Collection
    {
        return $this->padrino;
    }

    public function addPadrino(Padrino $padrino): self
    {
        if (!$this->padrino->contains($padrino)) {
            $this->padrino->add($padrino);
            $padrino->setAnimal($this);
        }

        return $this;
    }

    public function removePadrino(Padrino $padrino): self
    {
        if ($this->padrino->removeElement($padrino)) {
            // set the owning side to null (unless already changed)
            if ($padrino->getAnimal() === $this) {
                $padrino->setAnimal(null);
            }
        }

        return $this;
    }
}
