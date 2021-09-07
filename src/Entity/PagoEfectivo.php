<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PagoEfectivo
 *
 * @ORM\Table(name="pago_efectivo", indexes={@ORM\Index(name="IdControl", columns={"IdControl"}), @ORM\Index(name="fk_pago_efectivo_estado_gestion_pago_efectivo1_idx", columns={"estado_gestion_pago_efectivo_id"}), @ORM\Index(name="Id", columns={"id"}), @ORM\Index(name="fk_pago_efectivo_usuario1_idx", columns={"usuario_id"}), @ORM\Index(name="fk_pago_efectivo_cia1_idx", columns={"cia_id"})})
 * @ORM\Entity
 */
class PagoEfectivo
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
     * @ORM\Column(name="Chequeo", type="boolean", nullable=true)
     */
    private $chequeo = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="TipoDoc", type="string", length=2, nullable=true)
     */
    private $tipodoc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IdControl", type="string", length=20, nullable=true)
     */
    private $idcontrol;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NumeroPago", type="integer", nullable=true)
     */
    private $numeropago = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FechaPago", type="datetime", nullable=true)
     */
    private $fechapago;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FechaLM", type="datetime", nullable=true)
     */
    private $fechalm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Beneficiario", type="string", length=100, nullable=true)
     */
    private $beneficiario;

    /**
     * @var int|null
     *
     * @ORM\Column(name="importe", type="integer", nullable=true)
     */
    private $importe = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="numero_documento", type="integer", nullable=true)
     */
    private $numeroDocumento;

    /**
     * @var string|null
     *
     * @ORM\Column(name="estado", type="string", length=1, nullable=true, options={"default"="N"})
     */
    private $estado = 'N';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_entrega", type="datetime", nullable=true)
     */
    private $fechaEntrega;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notas", type="text", length=0, nullable=true)
     */
    private $notas;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notas2", type="text", length=0, nullable=true)
     */
    private $notas2;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_importacion", type="datetime", nullable=true)
     */
    private $fechaImportacion;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_actualizacion", type="datetime", nullable=true)
     */
    private $fechaActualizacion;

    /**
     * @var int
     *
     * @ORM\Column(name="usuario_id", type="integer", nullable=false)
     */
    private $usuarioId;

    /**
     * @var int
     *
     * @ORM\Column(name="estado_gestion_pago_efectivo_id", type="integer", nullable=false)
     */
    private $estadoGestionPagoEfectivoId;

    /**
     * @var int
     *
     * @ORM\Column(name="cia_id", type="integer", nullable=false)
     */
    private $ciaId;

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

    public function getTipodoc(): ?string
    {
        return $this->tipodoc;
    }

    public function setTipodoc(?string $tipodoc): self
    {
        $this->tipodoc = $tipodoc;

        return $this;
    }

    public function getIdcontrol(): ?string
    {
        return $this->idcontrol;
    }

    public function setIdcontrol(?string $idcontrol): self
    {
        $this->idcontrol = $idcontrol;

        return $this;
    }

    public function getNumeropago(): ?int
    {
        return $this->numeropago;
    }

    public function setNumeropago(?int $numeropago): self
    {
        $this->numeropago = $numeropago;

        return $this;
    }

    public function getFechapago(): ?\DateTimeInterface
    {
        return $this->fechapago;
    }

    public function setFechapago(?\DateTimeInterface $fechapago): self
    {
        $this->fechapago = $fechapago;

        return $this;
    }

    public function getFechalm(): ?\DateTimeInterface
    {
        return $this->fechalm;
    }

    public function setFechalm(?\DateTimeInterface $fechalm): self
    {
        $this->fechalm = $fechalm;

        return $this;
    }

    public function getBeneficiario(): ?string
    {
        return $this->beneficiario;
    }

    public function setBeneficiario(?string $beneficiario): self
    {
        $this->beneficiario = $beneficiario;

        return $this;
    }

    public function getImporte(): ?int
    {
        return $this->importe;
    }

    public function setImporte(?int $importe): self
    {
        $this->importe = $importe;

        return $this;
    }

    public function getNumeroDocumento(): ?int
    {
        return $this->numeroDocumento;
    }

    public function setNumeroDocumento(?int $numeroDocumento): self
    {
        $this->numeroDocumento = $numeroDocumento;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(?string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getFechaEntrega(): ?\DateTimeInterface
    {
        return $this->fechaEntrega;
    }

    public function setFechaEntrega(?\DateTimeInterface $fechaEntrega): self
    {
        $this->fechaEntrega = $fechaEntrega;

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

    public function getNotas2(): ?string
    {
        return $this->notas2;
    }

    public function setNotas2(?string $notas2): self
    {
        $this->notas2 = $notas2;

        return $this;
    }

    public function getFechaImportacion(): ?\DateTimeInterface
    {
        return $this->fechaImportacion;
    }

    public function setFechaImportacion(?\DateTimeInterface $fechaImportacion): self
    {
        $this->fechaImportacion = $fechaImportacion;

        return $this;
    }

    public function getFechaActualizacion(): ?\DateTimeInterface
    {
        return $this->fechaActualizacion;
    }

    public function setFechaActualizacion(?\DateTimeInterface $fechaActualizacion): self
    {
        $this->fechaActualizacion = $fechaActualizacion;

        return $this;
    }

    public function getUsuarioId(): ?int
    {
        return $this->usuarioId;
    }

    public function setUsuarioId(int $usuarioId): self
    {
        $this->usuarioId = $usuarioId;

        return $this;
    }

    public function getEstadoGestionPagoEfectivoId(): ?int
    {
        return $this->estadoGestionPagoEfectivoId;
    }

    public function setEstadoGestionPagoEfectivoId(int $estadoGestionPagoEfectivoId): self
    {
        $this->estadoGestionPagoEfectivoId = $estadoGestionPagoEfectivoId;

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


}
