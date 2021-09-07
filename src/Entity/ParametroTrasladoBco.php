<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParametroTrasladoBco
 *
 * @ORM\Table(name="parametro_traslado_Bco", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class ParametroTrasladoBco
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
     * @ORM\Column(name="cta_origen", type="integer", nullable=true)
     */
    private $ctaOrigen;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cta_destino", type="integer", nullable=true)
     */
    private $ctaDestino;

    /**
     * @var string|null
     *
     * @ORM\Column(name="documento", type="string", length=5, nullable=true)
     */
    private $documento;

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

    public function getCtaOrigen(): ?int
    {
        return $this->ctaOrigen;
    }

    public function setCtaOrigen(?int $ctaOrigen): self
    {
        $this->ctaOrigen = $ctaOrigen;

        return $this;
    }

    public function getCtaDestino(): ?int
    {
        return $this->ctaDestino;
    }

    public function setCtaDestino(?int $ctaDestino): self
    {
        $this->ctaDestino = $ctaDestino;

        return $this;
    }

    public function getDocumento(): ?string
    {
        return $this->documento;
    }

    public function setDocumento(?string $documento): self
    {
        $this->documento = $documento;

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
