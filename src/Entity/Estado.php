<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estado
 *
 * @ORM\Table(name="estado", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Estado
{
    /**
     * @var string
     *
     * @ORM\Column(name="cod_estado", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codEstado;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id", type="integer", nullable=true)
     */
    private $id = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion_estado", type="string", length=10, nullable=true)
     */
    private $descripcionEstado;

    public function getCodEstado(): ?string
    {
        return $this->codEstado;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

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
