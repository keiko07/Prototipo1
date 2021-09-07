<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Periodo
 *
 * @ORM\Table(name="periodo", indexes={@ORM\Index(name="id_referencia", columns={"id_referencia"})})
 * @ORM\Entity
 */
class Periodo
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
     * @var int|null
     *
     * @ORM\Column(name="id_referencia", type="integer", nullable=true)
     */
    private $idReferencia = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="referencia", type="string", length=100, nullable=true)
     */
    private $referencia;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_inicial", type="datetime", nullable=true)
     */
    private $fechaInicial;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_final", type="datetime", nullable=true)
     */
    private $fechaFinal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notas", type="text", length=0, nullable=true)
     */
    private $notas;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdReferencia(): ?int
    {
        return $this->idReferencia;
    }

    public function setIdReferencia(?int $idReferencia): self
    {
        $this->idReferencia = $idReferencia;

        return $this;
    }

    public function getReferencia(): ?string
    {
        return $this->referencia;
    }

    public function setReferencia(?string $referencia): self
    {
        $this->referencia = $referencia;

        return $this;
    }

    public function getFechaInicial(): ?\DateTimeInterface
    {
        return $this->fechaInicial;
    }

    public function setFechaInicial(?\DateTimeInterface $fechaInicial): self
    {
        $this->fechaInicial = $fechaInicial;

        return $this;
    }

    public function getFechaFinal(): ?\DateTimeInterface
    {
        return $this->fechaFinal;
    }

    public function setFechaFinal(?\DateTimeInterface $fechaFinal): self
    {
        $this->fechaFinal = $fechaFinal;

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
