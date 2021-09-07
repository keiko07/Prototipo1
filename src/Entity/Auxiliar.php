<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Auxiliar
 *
 * @ORM\Table(name="auxiliar", indexes={@ORM\Index(name="fk_auxiliar_tipo_documento1_idx", columns={"tipo_documento_id"}), @ORM\Index(name="fk_auxiliar_cia1_idx", columns={"cia_id"}), @ORM\Index(name="cuenta_aux2", columns={"cuenta_aux2"}), @ORM\Index(name="fk_auxiliar_casilla1_idx", columns={"casilla_id"}), @ORM\Index(name="id", columns={"id"}), @ORM\Index(name="cuenta_aux1", columns={"cuenta_aux1"}), @ORM\Index(name="fk_auxiliar_remesa_idx", columns={"remesa_id"})})
 * @ORM\Entity
 */
class Auxiliar
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
     * @var bool|null
     *
     * @ORM\Column(name="grupo1", type="boolean", nullable=true)
     */
    private $grupo1 = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="orden1", type="integer", nullable=true)
     */
    private $orden1 = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="orden2", type="integer", nullable=true)
     */
    private $orden2 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="activado1", type="string", length=1, nullable=true)
     */
    private $activado1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="auxiliar1", type="integer", nullable=true)
     */
    private $auxiliar1 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo_auxiliar1", type="string", length=1, nullable=true)
     */
    private $tipoAuxiliar1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="auxiliar2", type="integer", nullable=true)
     */
    private $auxiliar2 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo_auxiliar2", type="string", length=1, nullable=true)
     */
    private $tipoAuxiliar2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="auxiliar3", type="integer", nullable=true)
     */
    private $auxiliar3 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cuenta_objeto", type="string", length=6, nullable=true)
     */
    private $cuentaObjeto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cuenta_aux1", type="string", length=4, nullable=true)
     */
    private $cuentaAux1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cuenta_aux2", type="string", length=4, nullable=true)
     */
    private $cuentaAux2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codigo1", type="string", length=15, nullable=true)
     */
    private $codigo1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre_auxiliar1", type="string", length=50, nullable=true)
     */
    private $nombreAuxiliar1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre_auxiliar2", type="string", length=50, nullable=true)
     */
    private $nombreAuxiliar2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre_auxiliar3", type="string", length=255, nullable=true)
     */
    private $nombreAuxiliar3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="categoria1", type="boolean", nullable=true)
     */
    private $categoria1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="categoria2", type="boolean", nullable=true)
     */
    private $categoria2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="categoria3", type="boolean", nullable=true)
     */
    private $categoria3;

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
     * @var string|null
     *
     * @ORM\Column(name="activado5", type="string", length=1, nullable=true)
     */
    private $activado5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notas", type="text", length=0, nullable=true)
     */
    private $notas;

    

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_documento_id", type="integer", nullable=false)
     */
    private $tipoDocumentoId;

    /**
     * @var int
     *
     * @ORM\Column(name="casilla_id", type="integer", nullable=false)
     */
    private $casillaId;

    /**
     * @var int
     *
     * @ORM\Column(name="cia_id", type="integer", nullable=false)
     */
    private $ciaId;


    /**
     * @ORM\ManyToOne(targetEntity=TipoDocumento::class, inversedBy="auxiliares")
     */
    private $tipoDocumento;

    /**
     * @ORM\ManyToOne(targetEntity=Casilla::class, inversedBy="auxiliares")
     */
    private $casilla;

    /**
     * @ORM\ManyToOne(targetEntity=Cia::class, inversedBy="auxiliares")
     */
    private $cia;

    /**
     * @ORM\ManyToOne(targetEntity=Remesa::class, inversedBy="auxiliars")
     */
    private $remesa;

    /**
     * @ORM\ManyToOne(targetEntity=Criterio::class, inversedBy="auxiliars")
     * @ORM\JoinColumn(nullable=false)
     */
    private $criterio;

    /**
     * @ORM\OneToMany(targetEntity=GestionRegistro::class, mappedBy="auxiliar")
     */
    private $gestions;

    public function __construct()
    {
        $this->gestions = new ArrayCollection();
    }



    public function __toString()
    {
        return $this->nombreAuxiliar1.' '.$this->cia;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGrupo1(): ?bool
    {
        return $this->grupo1;
    }

    public function setGrupo1(?bool $grupo1): self
    {
        $this->grupo1 = $grupo1;

        return $this;
    }

    public function getOrden1(): ?int
    {
        return $this->orden1;
    }

    public function setOrden1(?int $orden1): self
    {
        $this->orden1 = $orden1;

        return $this;
    }

    public function getOrden2(): ?int
    {
        return $this->orden2;
    }

    public function setOrden2(?int $orden2): self
    {
        $this->orden2 = $orden2;

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

    public function getAuxiliar1(): ?int
    {
        return $this->auxiliar1;
    }

    public function setAuxiliar1(?int $auxiliar1): self
    {
        $this->auxiliar1 = $auxiliar1;

        return $this;
    }

    public function getTipoAuxiliar1(): ?string
    {
        return $this->tipoAuxiliar1;
    }

    public function setTipoAuxiliar1(?string $tipoAuxiliar1): self
    {
        $this->tipoAuxiliar1 = $tipoAuxiliar1;

        return $this;
    }

    public function getAuxiliar2(): ?int
    {
        return $this->auxiliar2;
    }

    public function setAuxiliar2(?int $auxiliar2): self
    {
        $this->auxiliar2 = $auxiliar2;

        return $this;
    }

    public function getTipoAuxiliar2(): ?string
    {
        return $this->tipoAuxiliar2;
    }

    public function setTipoAuxiliar2(?string $tipoAuxiliar2): self
    {
        $this->tipoAuxiliar2 = $tipoAuxiliar2;

        return $this;
    }

    public function getAuxiliar3(): ?int
    {
        return $this->auxiliar3;
    }

    public function setAuxiliar3(?int $auxiliar3): self
    {
        $this->auxiliar3 = $auxiliar3;

        return $this;
    }


    public function getCuentaObjeto(): ?string
    {
        return $this->cuentaObjeto;
    }

    public function setCuentaObjeto(?string $cuentaObjeto): self
    {
        $this->cuentaObjeto = $cuentaObjeto;

        return $this;
    }

    public function getCuentaAux1(): ?string
    {
        return $this->cuentaAux1;
    }

    public function setCuentaAux1(?string $cuentaAux1): self
    {
        $this->cuentaAux1 = $cuentaAux1;

        return $this;
    }

    public function getCuentaAux2(): ?string
    {
        return $this->cuentaAux2;
    }

    public function setCuentaAux2(?string $cuentaAux2): self
    {
        $this->cuentaAux2 = $cuentaAux2;

        return $this;
    }

    public function getCodigo1(): ?string
    {
        return $this->codigo1;
    }

    public function setCodigo1(?string $codigo1): self
    {
        $this->codigo1 = $codigo1;

        return $this;
    }

    public function getNombreAuxiliar1(): ?string
    {
        return $this->nombreAuxiliar1;
    }

    public function setNombreAuxiliar1(?string $nombreAuxiliar1): self
    {
        $this->nombreAuxiliar1 = $nombreAuxiliar1;

        return $this;
    }

    public function getNombreAuxiliar2(): ?string
    {
        return $this->nombreAuxiliar2;
    }

    public function setNombreAuxiliar2(?string $nombreAuxiliar2): self
    {
        $this->nombreAuxiliar2 = $nombreAuxiliar2;

        return $this;
    }

    public function getNombreAuxiliar3(): ?string
    {
        return $this->nombreAuxiliar3;
    }

    public function setNombreAuxiliar3(?string $nombreAuxiliar3): self
    {
        $this->nombreAuxiliar3 = $nombreAuxiliar3;

        return $this;
    }

    public function getCategoria1(): ?bool
    {
        return $this->categoria1;
    }

    public function setCategoria1(?bool $categoria1): self
    {
        $this->categoria1 = $categoria1;

        return $this;
    }

    public function getCategoria2(): ?bool
    {
        return $this->categoria2;
    }

    public function setCategoria2(?bool $categoria2): self
    {
        $this->categoria2 = $categoria2;

        return $this;
    }

    public function getCategoria3(): ?bool
    {
        return $this->categoria3;
    }

    public function setCategoria3(?bool $categoria3): self
    {
        $this->categoria3 = $categoria3;

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

    public function getActivado5(): ?string
    {
        return $this->activado5;
    }

    public function setActivado5(?string $activado5): self
    {
        $this->activado5 = $activado5;

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

    public function getTipoDocumentoId(): ?int
    {
        return $this->tipoDocumentoId;
    }

    public function setTipoDocumentoId(int $tipoDocumentoId): self
    {
        $this->tipoDocumentoId = $tipoDocumentoId;

        return $this;
    }

    public function getCasillaId(): ?int
    {
        return $this->casillaId;
    }

    public function setCasillaId(int $casillaId): self
    {
        $this->casillaId = $casillaId;

        return $this;
    }

    public function getCiaId(): ?int
    {
        return $this->ciaId;
    }

    public function setCiaId(int $ciaId): self
    {
        $this->ciaId = $ciaId;

        return $this;
    }

    public function getTipoDocumento(): ?TipoDocumento
    {
        return $this->tipoDocumento;
    }

    public function setTipoDocumento(?TipoDocumento $tipoDocumento): self
    {
        $this->tipoDocumento = $tipoDocumento;

        return $this;
    }

    public function getCasilla(): ?Casilla
    {
        return $this->casilla;
    }

    public function setCasilla(?Casilla $casilla): self
    {
        $this->casilla = $casilla;

        return $this;
    }

    public function getCia(): ?Cia
    {
        return $this->cia;
    }

    public function setCia(?Cia $cia): self
    {
        $this->cia = $cia;

        return $this;
    }

    public function getRemesa(): ?Remesa
    {
        return $this->remesa;
    }

    public function setRemesa(?Remesa $remesa): self
    {
        $this->remesa = $remesa;

        return $this;
    }

    public function getCriterio(): ?Criterio
    {
        return $this->criterio;
    }

    public function setCriterio(?Criterio $criterio): self
    {
        $this->criterio = $criterio;

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
            $gestion->setAuxiliar($this);
        }

        return $this;
    }

    public function removeGestion(GestionRegistro $gestion): self
    {
        if ($this->gestions->removeElement($gestion)) {
            // set the owning side to null (unless already changed)
            if ($gestion->getAuxiliar() === $this) {
                $gestion->setAuxiliar(null);
            }
        }

        return $this;
    }

}
