<?php

namespace App\Entity;

use App\Repository\PadrinoRepository;
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
}
