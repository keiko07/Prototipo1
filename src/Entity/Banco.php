<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banco
 *
 * @ORM\Table(name="banco")
 * @ORM\Entity
 */
class Banco
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
     * @ORM\Column(name="activo", type="string", length=1, nullable=true)
     */
    private $activo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="orden", type="integer", nullable=true)
     */
    private $orden = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="codigo_banco", type="integer", nullable=true)
     */
    private $codigoBanco;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre_banco", type="string", length=30, nullable=true)
     */
    private $nombreBanco;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nota", type="text", length=0, nullable=true)
     */
    private $nota;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getActivo(): ?string
    {
        return $this->activo;
    }

    public function setActivo(?string $activo): self
    {
        $this->activo = $activo;

        return $this;
    }

    public function getOrden(): ?int
    {
        return $this->orden;
    }

    public function setOrden(?int $orden): self
    {
        $this->orden = $orden;

        return $this;
    }

    public function getCodigoBanco(): ?int
    {
        return $this->codigoBanco;
    }

    public function setCodigoBanco(?int $codigoBanco): self
    {
        $this->codigoBanco = $codigoBanco;

        return $this;
    }

    public function getNombreBanco(): ?string
    {
        return $this->nombreBanco;
    }

    public function setNombreBanco(?string $nombreBanco): self
    {
        $this->nombreBanco = $nombreBanco;

        return $this;
    }

    public function getNota(): ?string
    {
        return $this->nota;
    }

    public function setNota(?string $nota): self
    {
        $this->nota = $nota;

        return $this;
    }


}
