<?php

namespace App\Entity;

use App\Repository\PerroRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use DateTime;
use ApiPlatform\Metadata\ApiResource;

#[ORM\Entity(repositoryClass: PerroRepository::class)]
#[ApiResource]
class Perro
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(type:"datetime", nullable: true)]
    private ?\DateTime  $fechaNacimiento = null;

    #[ORM\Column(length: 255)]
    private ?string $sexo = null;

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

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imagen = null;

    #[ORM\OneToMany(mappedBy: 'perro', targetEntity: Acoge::class)]
    private Collection $acoge;

    #[ORM\OneToMany(mappedBy: 'perro', targetEntity: Adopta::class)]
    private Collection $adopta;

    #[ORM\ManyToMany(targetEntity: Padrino::class, inversedBy: 'perros')]
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

    public function __toString() 
    {
        return $this->getNombre();
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

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

    public function getSexo(): ?string
    {
        return $this->sexo;
    }

    public function setSexo(string $sexo): self
    {
        $this->sexo = $sexo;

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

    public function getImagen(): ?string
    {
        return $this->imagen;
    }

    public function setImagen(?string $imagen): self
    {
        $this->imagen = $imagen;

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
            $acoge->setPerro($this);
        }

        return $this;
    }

    public function removeAcoge(Acoge $acoge): self
    {
        if ($this->acoge->removeElement($acoge)) {
            // set the owning side to null (unless already changed)
            if ($acoge->getPerro() === $this) {
                $acoge->setPerro(null);
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
            $adoptum->setPerro($this);
        }

        return $this;
    }

    public function removeAdoptum(Adopta $adoptum): self
    {
        if ($this->adopta->removeElement($adoptum)) {
            // set the owning side to null (unless already changed)
            if ($adoptum->getPerro() === $this) {
                $adoptum->setPerro(null);
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
            $padrino->setPerro($this);
        }

        return $this;
    }

    public function removePadrino(Padrino $padrino): self
    {
        if ($this->padrino->removeElement($padrino)) {
            // set the owning side to null (unless already changed)
            if ($padrino->getPerro() === $this) {
                $padrino->setPerro(null);
            }
        }

        return $this;
    }
}
