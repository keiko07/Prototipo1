<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 *
 * @ORM\Table(name="producto")
 * @ORM\Entity
 */
class Producto
{
    /**
     * @var int
     *
     * @ORM\Column(name="cod_producto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codProducto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion_producto", type="string", length=15, nullable=true)
     */
    private $descripcionProducto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observacion", type="string", length=50, nullable=true)
     */
    private $observacion;

    public function getCodProducto(): ?int
    {
        return $this->codProducto;
    }

    public function getDescripcionProducto(): ?string
    {
        return $this->descripcionProducto;
    }

    public function setDescripcionProducto(?string $descripcionProducto): self
    {
        $this->descripcionProducto = $descripcionProducto;

        return $this;
    }

    public function getObservacion(): ?string
    {
        return $this->observacion;
    }

    public function setObservacion(?string $observacion): self
    {
        $this->observacion = $observacion;

        return $this;
    }


}
