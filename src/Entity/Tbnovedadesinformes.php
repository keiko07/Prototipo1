<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tbnovedadesinformes
 *
 * @ORM\Table(name="TbNovedadesInformes", indexes={@ORM\Index(name="Novedad", columns={"Novedad"})})
 * @ORM\Entity
 */
class Tbnovedadesinformes
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="Orden", type="integer", nullable=true)
     */
    private $orden;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Activado1", type="string", length=1, nullable=true)
     */
    private $activado1;

    /**
     * @var int
     *
     * @ORM\Column(name="CodigoNovedad", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigonovedad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Novedad", type="string", length=100, nullable=true)
     */
    private $novedad;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Notas", type="text", length=0, nullable=true)
     */
    private $notas;

    public function getOrden(): ?int
    {
        return $this->orden;
    }

    public function setOrden(?int $orden): self
    {
        $this->orden = $orden;

        return $this;
    }

    public function getActivado1(): ?string
    {
        return $this->activado1;
    }

    public function setActivado1(?string $activado1): self
    {
        $this->activado1 = $activado1;

        return $this;
    }

    public function getCodigonovedad(): ?int
    {
        return $this->codigonovedad;
    }

    public function getNovedad(): ?string
    {
        return $this->novedad;
    }

    public function setNovedad(?string $novedad): self
    {
        $this->novedad = $novedad;

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
