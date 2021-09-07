<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Remesa
 *
 * @ORM\Table(name="remesa", uniqueConstraints={@ORM\UniqueConstraint(name="remesa", columns={"remesa"})}, indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Remesa
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
     * @ORM\Column(name="activado1", type="string", length=1, nullable=true)
     */
    private $activado1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="activado2", type="string", length=1, nullable=true)
     */
    private $activado2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remesa", type="string", length=15, nullable=true)
     */
    private $remesa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codigo_NC", type="string", length=10, nullable=true)
     */
    private $codigoNc;

    /**
     * @ORM\OneToMany(targetEntity=Auxiliar::class, mappedBy="remesa")
     */
    private $auxiliars;

    public function __construct()
    {
        $this->auxiliars = new ArrayCollection();
    }




    public function __toString()
    {
        return $this->id. ' ' . $this->remesa;
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getActivado2(): ?string
    {
        return $this->activado2;
    }

    public function setActivado2(?string $activado2): self
    {
        $this->activado2 = $activado2;

        return $this;
    }

    public function getRemesa(): ?string
    {
        return $this->remesa;
    }

    public function setRemesa(?string $remesa): self
    {
        $this->remesa = $remesa;

        return $this;
    }

    public function getCodigoNc(): ?string
    {
        return $this->codigoNc;
    }

    public function setCodigoNc(?string $codigoNc): self
    {
        $this->codigoNc = $codigoNc;

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
            $auxiliar->setRemesa($this);
        }

        return $this;
    }

    public function removeAuxiliar(Auxiliar $auxiliar): self
    {
        if ($this->auxiliars->removeElement($auxiliar)) {
            // set the owning side to null (unless already changed)
            if ($auxiliar->getRemesa() === $this) {
                $auxiliar->setRemesa(null);
            }
        }

        return $this;
    }


}
