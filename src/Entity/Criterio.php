<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Criterio
 *
 * @ORM\Table(name="criterio", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Criterio
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
     * @ORM\Column(name="documento", type="string", length=30, nullable=true)
     */
    private $documento;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="string", length=100, nullable=true)
     */
    private $descripcion;

    /**
     * @ORM\OneToMany(targetEntity=Auxiliar::class, mappedBy="criterio", orphanRemoval=true)
     */
    private $auxiliars;

    public function __construct()
    {
        $this->auxiliars = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->descripcion;
    }


    public function getId(): ?int
    {
        return $this->id;
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
    public function getAuxiliars(): Collection
    {
        return $this->auxiliars;
    }

    public function addAuxiliar(Auxiliar $auxiliar): self
    {
        if (!$this->auxiliars->contains($auxiliar)) {
            $this->auxiliars[] = $auxiliar;
            $auxiliar->setCriterio($this);
        }

        return $this;
    }

    public function removeAuxiliar(Auxiliar $auxiliar): self
    {
        if ($this->auxiliars->removeElement($auxiliar)) {
            // set the owning side to null (unless already changed)
            if ($auxiliar->getCriterio() === $this) {
                $auxiliar->setCriterio(null);
            }
        }

        return $this;
    }


}
