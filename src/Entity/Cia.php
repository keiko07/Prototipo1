<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Cia
 *
 * @ORM\Table(name="cia")
 * @ORM\Entity
 */
class Cia
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
     * @ORM\Column(name="activado", type="string", length=1, nullable=true)
     */
    private $activado;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=true)
     */
    private $descripcion;

    /**
     * @ORM\OneToMany(targetEntity=Auxiliar::class, mappedBy="cia")
     */
    private $auxiliares;

    public function __construct()
    {
        $this->auxiliares = new ArrayCollection();
    }
    public function __toString()
    {
        return $this->descripcion.' ' .$this->id;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getActivado(): ?string
    {
        return $this->activado;
    }

    public function setActivado(?string $activado): self
    {
        $this->activado = $activado;

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
            $auxiliare->setCia($this);
        }

        return $this;
    }

    public function removeAuxiliare(Auxiliar $auxiliare): self
    {
        if ($this->auxiliares->removeElement($auxiliare)) {
            // set the owning side to null (unless already changed)
            if ($auxiliare->getCia() === $this) {
                $auxiliare->setCia(null);
            }
        }

        return $this;
    }


}
