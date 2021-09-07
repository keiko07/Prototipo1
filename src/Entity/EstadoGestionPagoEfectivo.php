<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadoGestionPagoEfectivo
 *
 * @ORM\Table(name="estado_gestion_pago_efectivo", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class EstadoGestionPagoEfectivo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="activado", type="string", length=1, nullable=true)
     */
    private $activado;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codigo_estado", type="string", length=2, nullable=true)
     */
    private $codigoEstado;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion_estado", type="string", length=50, nullable=true)
     */
    private $descripcionEstado;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getActivado(): ?string
    {
        return $this->activado;
    }

    public function setActivado(?string $activado): self
    {
        $this->activado = $activado;

        return $this;
    }

    public function getCodigoEstado(): ?string
    {
        return $this->codigoEstado;
    }

    public function setCodigoEstado(?string $codigoEstado): self
    {
        $this->codigoEstado = $codigoEstado;

        return $this;
    }

    public function getDescripcionEstado(): ?string
    {
        return $this->descripcionEstado;
    }

    public function setDescripcionEstado(?string $descripcionEstado): self
    {
        $this->descripcionEstado = $descripcionEstado;

        return $this;
    }


}
