<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Forma
 *
 * @ORM\Table(name="forma")
 * @ORM\Entity
 */
class Forma
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
     * @ORM\Column(name="codigo", type="string", length=15, nullable=true)
     */
    private $codigo;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="orden_forma", type="boolean", nullable=true)
     */
    private $ordenForma;

    /**
     * @var string|null
     *
     * @ORM\Column(name="forma", type="string", length=50, nullable=true)
     */
    private $forma;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="orden_categoria_forma", type="boolean", nullable=true)
     */
    private $ordenCategoriaForma = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="categoria_forma", type="string", length=50, nullable=true)
     */
    private $categoriaForma;

    /**
     * @var string|null
     *
     * @ORM\Column(name="categoria1", type="string", length=7, nullable=true)
     */
    private $categoria1;

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
     * @ORM\Column(name="activado3", type="string", length=1, nullable=true)
     */
    private $activado3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="activado4", type="string", length=1, nullable=true)
     */
    private $activado4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="signo", type="integer", nullable=true)
     */
    private $signo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notas", type="string", length=100, nullable=true)
     */
    private $notas;

    /**
     * @ORM\OneToMany(targetEntity=GestionRegistro::class, mappedBy="forma")
     */
    private $gestions;

    public function __construct()
    {
        $this->gestions = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->categoriaForma;
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

    public function getOrdenForma(): ?bool
    {
        return $this->ordenForma;
    }

    public function setOrdenForma(?bool $ordenForma): self
    {
        $this->ordenForma = $ordenForma;

        return $this;
    }

    public function getForma(): ?string
    {
        return $this->forma;
    }

    public function setForma(?string $forma): self
    {
        $this->forma = $forma;

        return $this;
    }

    public function getOrdenCategoriaForma(): ?bool
    {
        return $this->ordenCategoriaForma;
    }

    public function setOrdenCategoriaForma(?bool $ordenCategoriaForma): self
    {
        $this->ordenCategoriaForma = $ordenCategoriaForma;

        return $this;
    }

    public function getCategoriaForma(): ?string
    {
        return $this->categoriaForma;
    }

    public function setCategoriaForma(?string $categoriaForma): self
    {
        $this->categoriaForma = $categoriaForma;

        return $this;
    }

    public function getCategoria1(): ?string
    {
        return $this->categoria1;
    }

    public function setCategoria1(?string $categoria1): self
    {
        $this->categoria1 = $categoria1;

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

    public function getActivado2(): ?string
    {
        return $this->activado2;
    }

    public function setActivado2(?string $activado2): self
    {
        $this->activado2 = $activado2;

        return $this;
    }

    public function getActivado3(): ?string
    {
        return $this->activado3;
    }

    public function setActivado3(?string $activado3): self
    {
        $this->activado3 = $activado3;

        return $this;
    }

    public function getActivado4(): ?string
    {
        return $this->activado4;
    }

    public function setActivado4(?string $activado4): self
    {
        $this->activado4 = $activado4;

        return $this;
    }

    public function getSigno(): ?int
    {
        return $this->signo;
    }

    public function setSigno(?int $signo): self
    {
        $this->signo = $signo;

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

    /**
     * @return Collection|GestionRegistro[]
     */
    public function getGestions(): Collection
    {
        return $this->gestions;
    }

    public function addGestion(GestionRegistro $gestion): self
    {
        if (!$this->gestions->contains($gestion)) {
            $this->gestions[] = $gestion;
            $gestion->setForma($this);
        }

        return $this;
    }

    public function removeGestion(GestionRegistro $gestion): self
    {
        if ($this->gestions->removeElement($gestion)) {
            // set the owning side to null (unless already changed)
            if ($gestion->getForma() === $this) {
                $gestion->setForma(null);
            }
        }

        return $this;
    }


}
