<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tbestadosinforme
 *
 * @ORM\Table(name="TbEstadosInforme", uniqueConstraints={@ORM\UniqueConstraint(name="CodigoEstado", columns={"CodigoEstado"}), @ORM\UniqueConstraint(name="Estado", columns={"Estado"})})
 * @ORM\Entity
 */
class Tbestadosinforme
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="Activado1", type="string", length=1, nullable=true)
     */
    private $activado1;

    /**
     * @var int
     *
     * @ORM\Column(name="CodigoEstado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigoestado;

    /**
     * @var string
     *
     * @ORM\Column(name="Estado", type="string", length=50, nullable=false)
     */
    private $estado;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Notas", type="text", length=0, nullable=true)
     */
    private $notas;

    public function getActivado1(): ?string
    {
        return $this->activado1;
    }

    public function setActivado1(?string $activado1): self
    {
        $this->activado1 = $activado1;

        return $this;
    }

    public function getCodigoestado(): ?int
    {
        return $this->codigoestado;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getNotas(): ?string
    {
        return $this->notas;
    }

    public function setNotas(?string $notas): self
    {
        $this->notas = $notas;

        return $this;
    }


}
