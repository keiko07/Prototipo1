<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * TipoDocumento
 *
 * @ORM\Table(name="tipo_documento")
 * @ORM\Entity
 */
class TipoDocumento
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
     * @ORM\Column(name="codigo", type="string", length=3, nullable=true)
     */
    private $codigo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="string", length=30, nullable=true)
     */
    private $descripcion;

    /**
     * @ORM\OneToMany(targetEntity=Auxiliar::class, mappedBy="tipoDocumento")
     */
    private $auxiliares;

    public function __construct()
    {
        $this->auxiliares = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->descripcion;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodigo(): ?string
    {
        return $this->codigo;
    }

    public function setCodigo(?string $codigo): self
    {
        $this->codigo = $codigo;

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

    /**
     * @return Collection|Auxiliar[]
     */
    public function getAuxiliares(): Collection
    {
        return $this->auxiliares;
    }

    public function addAuxiliare(Auxiliar $auxiliare): self
    {
        if (!$this->auxiliares->contains($auxiliare)) {
            $this->auxiliares[] = $auxiliare;
            $auxiliare->setTipoDocumento($this);
        }

        return $this;
    }

    public function removeAuxiliare(Auxiliar $auxiliare): self
    {
        if ($this->auxiliares->removeElement($auxiliare)) {
            // set the owning side to null (unless already changed)
            if ($auxiliare->getTipoDocumento() === $this) {
                $auxiliare->setTipoDocumento(null);
            }
        }

        return $this;
    }


}
