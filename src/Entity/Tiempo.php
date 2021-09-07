<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tiempo
 *
 * @ORM\Table(name="tiempo", indexes={@ORM\Index(name="id_referencia", columns={"id_referencia"})})
 * @ORM\Entity
 */
class Tiempo
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
     * @ORM\Column(name="referencia", type="string", length=30, nullable=true)
     */
    private $referencia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tiempo", type="integer", nullable=true)
     */
    private $tiempo = '0';

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

    public function getTiempo(): ?int
    {
        return $this->tiempo;
    }

    public function setTiempo(?int $tiempo): self
    {
        $this->tiempo = $tiempo;

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
