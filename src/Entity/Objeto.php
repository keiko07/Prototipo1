<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Objeto
 *
 * @ORM\Table(name="objeto", indexes={@ORM\Index(name="IdObjeto", columns={"IdObjeto"}), @ORM\Index(name="fk_objeto_remesa1_idx", columns={"remesa_id"})})
 * @ORM\Entity
 */
class Objeto
{
    /**
     * @var string
     *
     * @ORM\Column(name="IdObjeto", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idobjeto;

    /**
     * @var int|null
     *
     * @ORM\Column(name="orden", type="integer", nullable=true)
     */
    private $orden;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="codigo_objeto", type="boolean", nullable=true)
     */
    private $codigoObjeto = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo_objeto", type="string", length=10, nullable=true)
     */
    private $tipoObjeto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre_objeto_sistema", type="string", length=50, nullable=true)
     */
    private $nombreObjetoSistema;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre_objeto_alterno", type="string", length=100, nullable=true)
     */
    private $nombreObjetoAlterno;

    /**
     * @var string|null
     *
     * @ORM\Column(name="categoria_adm", type="string", length=1, nullable=true)
     */
    private $categoriaAdm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="categoria0", type="string", length=1, nullable=true)
     */
    private $categoria0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="categoria1", type="string", length=1, nullable=true)
     */
    private $categoria1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="categoria2", type="string", length=1, nullable=true)
     */
    private $categoria2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observacion", type="string", length=255, nullable=true)
     */
    private $observacion;

    /**
     * @var int
     *
     * @ORM\Column(name="remesa_id", type="integer", nullable=false)
     */
    private $remesaId;

    public function getIdobjeto(): ?string
    {
        return $this->idobjeto;
    }

    public function getOrden(): ?int
    {
        return $this->orden;
    }

    public function setOrden(?int $orden): self
    {
        $this->orden = $orden;

        return $this;
    }

    public function getCodigoObjeto(): ?bool
    {
        return $this->codigoObjeto;
    }

    public function setCodigoObjeto(?bool $codigoObjeto): self
    {
        $this->codigoObjeto = $codigoObjeto;

        return $this;
    }

    public function getTipoObjeto(): ?string
    {
        return $this->tipoObjeto;
    }

    public function setTipoObjeto(?string $tipoObjeto): self
    {
        $this->tipoObjeto = $tipoObjeto;

        return $this;
    }

    public function getNombreObjetoSistema(): ?string
    {
        return $this->nombreObjetoSistema;
    }

    public function setNombreObjetoSistema(?string $nombreObjetoSistema): self
    {
        $this->nombreObjetoSistema = $nombreObjetoSistema;

        return $this;
    }

    public function getNombreObjetoAlterno(): ?string
    {
        return $this->nombreObjetoAlterno;
    }

    public function setNombreObjetoAlterno(?string $nombreObjetoAlterno): self
    {
        $this->nombreObjetoAlterno = $nombreObjetoAlterno;

        return $this;
    }

    public function getCategoriaAdm(): ?string
    {
        return $this->categoriaAdm;
    }

    public function setCategoriaAdm(?string $categoriaAdm): self
    {
        $this->categoriaAdm = $categoriaAdm;

        return $this;
    }

    public function getCategoria0(): ?string
    {
        return $this->categoria0;
    }

    public function setCategoria0(?string $categoria0): self
    {
        $this->categoria0 = $categoria0;

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

    public function getCategoria2(): ?string
    {
        return $this->categoria2;
    }

    public function setCategoria2(?string $categoria2): self
    {
        $this->categoria2 = $categoria2;

        return $this;
    }

    public function getObservacion(): ?string
    {
        return $this->observacion;
    }

    public function setObservacion(?string $observacion): self
    {
        $this->observacion = $observacion;

        return $this;
    }

    public function getRemesaId(): ?int
    {
        return $this->remesaId;
    }

    public function setRemesaId(int $remesaId): self
    {
        $this->remesaId = $remesaId;

        return $this;
    }


}
