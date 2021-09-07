<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Casilla
 *
 * @ORM\Table(name="casilla", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Casilla
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
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=true)
     */
    private $descripcion;

    /**
     * @ORM\OneToMany(targetEntity=Auxiliar::class, mappedBy="casilla")
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
            $auxiliare->setCasilla($this);
        }

        return $this;
    }

    public function removeAuxiliare(Auxiliar $auxiliare): self
    {
        if ($this->auxiliares->removeElement($auxiliare)) {
            // set the owning side to null (unless already changed)
            if ($auxiliare->getCasilla() === $this) {
                $auxiliare->setCasilla(null);
            }
        }

        return $this;
    }


}
