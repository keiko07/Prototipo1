<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agrupador1
 *
 * @ORM\Table(name="agrupador1", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Agrupador1
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
     * @var bool|null
     *
     * @ORM\Column(name="id_agrupador", type="boolean", nullable=true)
     */
    private $idAgrupador;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="string", length=60, nullable=true)
     */
    private $descripcion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdAgrupador(): ?bool
    {
        return $this->idAgrupador;
    }

    public function setIdAgrupador(?bool $idAgrupador): self
    {
        $this->idAgrupador = $idAgrupador;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }


}
