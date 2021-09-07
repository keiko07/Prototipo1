<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuenta
 *
 * @ORM\Table(name="cuenta", uniqueConstraints={@ORM\UniqueConstraint(name="codigo_cuenta_jde", columns={"codigo_cuenta_jde"})}, indexes={@ORM\Index(name="fk_cuenta_cia1_idx", columns={"cia_id"}), @ORM\Index(name="fk_cuenta_agrupador21_idx", columns={"agrupador2_id"}), @ORM\Index(name="fk_cuenta_banco1_idx", columns={"banco_id"}), @ORM\Index(name="cuenta_contable", columns={"cuenta_contable"}), @ORM\Index(name="fk_cuenta_categoria_cuenta1_idx", columns={"categoria_cuenta_id"}), @ORM\Index(name="fk_cuenta_producto1_idx", columns={"producto_cod_producto"}), @ORM\Index(name="fk_cuenta_agrupador11_idx", columns={"agrupador1_id"}), @ORM\Index(name="id", columns={"id"}), @ORM\Index(name="fk_cuenta_categoria_saldo1_idx", columns={"categoria_saldo_id"})})
 * @ORM\Entity
 */
class Cuenta
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
     * @ORM\Column(name="chequeo", type="boolean", nullable=true)
     */
    private $chequeo = '0';

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
     * @ORM\Column(name="categoria3", type="integer", nullable=true)
     */
    private $categoria3 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="categoria4", type="text", length=0, nullable=true)
     */
    private $categoria4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codigo_cuenta_jde", type="string", length=10, nullable=true)
     */
    private $codigoCuentaJde;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cuenta_objeto", type="string", length=6, nullable=true)
     */
    private $cuentaObjeto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cuenta_auxiliar", type="string", length=4, nullable=true)
     */
    private $cuentaAuxiliar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cuenta_contable", type="string", length=25, nullable=true)
     */
    private $cuentaContable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cuenta_bancaria", type="string", length=50, nullable=true)
     */
    private $cuentaBancaria;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cta_corta", type="string", length=5, nullable=true)
     */
    private $ctaCorta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="auxiliar", type="string", length=6, nullable=true)
     */
    private $auxiliar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo_auxiliar", type="string", length=1, nullable=true)
     */
    private $tipoAuxiliar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cuenta_descripcion", type="string", length=50, nullable=true)
     */
    private $cuentaDescripcion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nota", type="text", length=0, nullable=true)
     */
    private $nota;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observacione", type="text", length=0, nullable=true)
     */
    private $observacione;

    /**
     * @var int|null
     *
     * @ORM\Column(name="orden1", type="integer", nullable=true)
     */
    private $orden1 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cta_extracto", type="string", length=50, nullable=true)
     */
    private $ctaExtracto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cta_rp_saldos", type="string", length=50, nullable=true)
     */
    private $ctaRpSaldos;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_apertura", type="datetime", nullable=true)
     */
    private $fechaApertura;

    /**
     * @var string|null
     *
     * @ORM\Column(name="exenta", type="string", length=1, nullable=true)
     */
    private $exenta;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_exencion", type="datetime", nullable=true)
     */
    private $fechaExencion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="area", type="string", length=255, nullable=true)
     */
    private $area;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion_saldos", type="text", length=0, nullable=true)
     */
    private $descripcionSaldos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="estado_cta", type="string", length=1, nullable=true)
     */
    private $estadoCta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="agrupador22", type="text", length=0, nullable=true)
     */
    private $agrupador22;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="respaldo", type="boolean", nullable=true)
     */
    private $respaldo;

    /**
     * @var int
     *
     * @ORM\Column(name="categoria_cuenta_id", type="integer", nullable=false)
     */
    private $categoriaCuentaId;

    /**
     * @var int
     *
     * @ORM\Column(name="categoria_saldo_id", type="integer", nullable=false)
     */
    private $categoriaSaldoId;

    /**
     * @var int
     *
     * @ORM\Column(name="cia_id", type="integer", nullable=false)
     */
    private $ciaId;

    /**
     * @var int
     *
     * @ORM\Column(name="producto_cod_producto", type="integer", nullable=false)
     */
    private $productoCodProducto;

    /**
     * @var int
     *
     * @ORM\Column(name="agrupador2_id", type="integer", nullable=false)
     */
    private $agrupador2Id;

    /**
     * @var int
     *
     * @ORM\Column(name="agrupador1_id", type="integer", nullable=false)
     */
    private $agrupador1Id;

    /**
     * @var int
     *
     * @ORM\Column(name="banco_id", type="integer", nullable=false)
     */
    private $bancoId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChequeo(): ?bool
    {
        return $this->chequeo;
    }

    public function setChequeo(?bool $chequeo): self
    {
        $this->chequeo = $chequeo;

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

    public function getCategoria3(): ?int
    {
        return $this->categoria3;
    }

    public function setCategoria3(?int $categoria3): self
    {
        $this->categoria3 = $categoria3;

        return $this;
    }

    public function getCategoria4(): ?string
    {
        return $this->categoria4;
    }

    public function setCategoria4(?string $categoria4): self
    {
        $this->categoria4 = $categoria4;

        return $this;
    }

    public function getCodigoCuentaJde(): ?string
    {
        return $this->codigoCuentaJde;
    }

    public function setCodigoCuentaJde(?string $codigoCuentaJde): self
    {
        $this->codigoCuentaJde = $codigoCuentaJde;

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

    public function getCuentaAuxiliar(): ?string
    {
        return $this->cuentaAuxiliar;
    }

    public function setCuentaAuxiliar(?string $cuentaAuxiliar): self
    {
        $this->cuentaAuxiliar = $cuentaAuxiliar;

        return $this;
    }

    public function getCuentaContable(): ?string
    {
        return $this->cuentaContable;
    }

    public function setCuentaContable(?string $cuentaContable): self
    {
        $this->cuentaContable = $cuentaContable;

        return $this;
    }

    public function getCuentaBancaria(): ?string
    {
        return $this->cuentaBancaria;
    }

    public function setCuentaBancaria(?string $cuentaBancaria): self
    {
        $this->cuentaBancaria = $cuentaBancaria;

        return $this;
    }

    public function getCtaCorta(): ?string
    {
        return $this->ctaCorta;
    }

    public function setCtaCorta(?string $ctaCorta): self
    {
        $this->ctaCorta = $ctaCorta;

        return $this;
    }

    public function getAuxiliar(): ?string
    {
        return $this->auxiliar;
    }

    public function setAuxiliar(?string $auxiliar): self
    {
        $this->auxiliar = $auxiliar;

        return $this;
    }

    public function getTipoAuxiliar(): ?string
    {
        return $this->tipoAuxiliar;
    }

    public function setTipoAuxiliar(?string $tipoAuxiliar): self
    {
        $this->tipoAuxiliar = $tipoAuxiliar;

        return $this;
    }

    public function getCuentaDescripcion(): ?string
    {
        return $this->cuentaDescripcion;
    }

    public function setCuentaDescripcion(?string $cuentaDescripcion): self
    {
        $this->cuentaDescripcion = $cuentaDescripcion;

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

    public function getObservacione(): ?string
    {
        return $this->observacione;
    }

    public function setObservacione(?string $observacione): self
    {
        $this->observacione = $observacione;

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

    public function getCtaExtracto(): ?string
    {
        return $this->ctaExtracto;
    }

    public function setCtaExtracto(?string $ctaExtracto): self
    {
        $this->ctaExtracto = $ctaExtracto;

        return $this;
    }

    public function getCtaRpSaldos(): ?string
    {
        return $this->ctaRpSaldos;
    }

    public function setCtaRpSaldos(?string $ctaRpSaldos): self
    {
        $this->ctaRpSaldos = $ctaRpSaldos;

        return $this;
    }

    public function getFechaApertura(): ?\DateTimeInterface
    {
        return $this->fechaApertura;
    }

    public function setFechaApertura(?\DateTimeInterface $fechaApertura): self
    {
        $this->fechaApertura = $fechaApertura;

        return $this;
    }

    public function getExenta(): ?string
    {
        return $this->exenta;
    }

    public function setExenta(?string $exenta): self
    {
        $this->exenta = $exenta;

        return $this;
    }

    public function getFechaExencion(): ?\DateTimeInterface
    {
        return $this->fechaExencion;
    }

    public function setFechaExencion(?\DateTimeInterface $fechaExencion): self
    {
        $this->fechaExencion = $fechaExencion;

        return $this;
    }

    public function getArea(): ?string
    {
        return $this->area;
    }

    public function setArea(?string $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getDescripcionSaldos(): ?string
    {
        return $this->descripcionSaldos;
    }

    public function setDescripcionSaldos(?string $descripcionSaldos): self
    {
        $this->descripcionSaldos = $descripcionSaldos;

        return $this;
    }

    public function getEstadoCta(): ?string
    {
        return $this->estadoCta;
    }

    public function setEstadoCta(?string $estadoCta): self
    {
        $this->estadoCta = $estadoCta;

        return $this;
    }

    public function getAgrupador22(): ?string
    {
        return $this->agrupador22;
    }

    public function setAgrupador22(?string $agrupador22): self
    {
        $this->agrupador22 = $agrupador22;

        return $this;
    }

    public function getRespaldo(): ?bool
    {
        return $this->respaldo;
    }

    public function setRespaldo(?bool $respaldo): self
    {
        $this->respaldo = $respaldo;

        return $this;
    }

    public function getCategoriaCuentaId(): ?int
    {
        return $this->categoriaCuentaId;
    }

    public function setCategoriaCuentaId(int $categoriaCuentaId): self
    {
        $this->categoriaCuentaId = $categoriaCuentaId;

        return $this;
    }

    public function getCategoriaSaldoId(): ?int
    {
        return $this->categoriaSaldoId;
    }

    public function setCategoriaSaldoId(int $categoriaSaldoId): self
    {
        $this->categoriaSaldoId = $categoriaSaldoId;

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

    public function getProductoCodProducto(): ?int
    {
        return $this->productoCodProducto;
    }

    public function setProductoCodProducto(int $productoCodProducto): self
    {
        $this->productoCodProducto = $productoCodProducto;

        return $this;
    }

    public function getAgrupador2Id(): ?int
    {
        return $this->agrupador2Id;
    }

    public function setAgrupador2Id(int $agrupador2Id): self
    {
        $this->agrupador2Id = $agrupador2Id;

        return $this;
    }

    public function getAgrupador1Id(): ?int
    {
        return $this->agrupador1Id;
    }

    public function setAgrupador1Id(int $agrupador1Id): self
    {
        $this->agrupador1Id = $agrupador1Id;

        return $this;
    }

    public function getBancoId(): ?int
    {
        return $this->bancoId;
    }

    public function setBancoId(int $bancoId): self
    {
        $this->bancoId = $bancoId;

        return $this;
    }


}
