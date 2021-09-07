<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GestionRegistro
 *
 * @ORM\Table(name="gestion_registro", indexes={@ORM\Index(name="id", columns={"id"}), @ORM\Index(name="fk_gestion_registro_auxiliar1_idx", columns={"auxiliar_id"}), @ORM\Index(name="fk_gestion_registro_secuencia_registro1_idx", columns={"secuencia_registro_id"}), @ORM\Index(name="fk_gestion_registro_forma1_idx", columns={"forma_id"}), @ORM\Index(name="fk_gestion_registro_usuario1_idx", columns={"usuario_id"}), @ORM\Index(name="fk_gestion_registro_cuenta1_idx", columns={"cuenta_id"})})
 * @ORM\Entity
 */
class GestionRegistro
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
     * @var bool|null
     *
     * @ORM\Column(name="mk", type="boolean", nullable=true)
     */
    private $mk = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="id_interfaz", type="boolean", nullable=true)
     */
    private $idInterfaz = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_lote", type="integer", nullable=true)
     */
    private $idLote;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_control", type="integer", nullable=true)
     */
    private $idControl;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_ingreso", type="datetime", nullable=true)
     */
    private $fechaIngreso;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_LM", type="datetime", nullable=true)
     */
    private $fechaLm;

    /**
     * @var float|null
     *
     * @ORM\Column(name="importe", type="float", precision=10, scale=0, nullable=true)
     */
    private $importe = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="id_control1", type="string", length=15, nullable=true)
     */
    private $idControl1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_control2", type="integer", nullable=true)
     */
    private $idControl2;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_control1", type="datetime", nullable=true)
     */
    private $fechaControl1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notas", type="text", length=0, nullable=true)
     */
    private $notas;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observaciones", type="string", length=30, nullable=true)
     */
    private $observaciones;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_registro", type="datetime", nullable=true)
     */
    private $fechaRegistro;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_actualizacion", type="datetime", nullable=true)
     */
    private $fechaActualizacion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="marca_banco", type="string", length=1, nullable=true, options={"default"="N"})
     */
    private $marcaBanco = 'N';

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_batch", type="integer", nullable=true)
     */
    private $numBatch;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_documento", type="integer", nullable=true)
     */
    private $numDocumento;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bloqueo", type="string", length=1, nullable=true, options={"default"="N"})
     */
    private $bloqueo = 'N';

    /**
     * @var int
     *
     * @ORM\Column(name="forma_id", type="integer", nullable=false)
     */
    private $formaId;

    /**
     * @var int
     *
     * @ORM\Column(name="auxiliar_id", type="integer", nullable=false)
     */
    private $auxiliarId;

    /**
     * @var int
     *
     * @ORM\Column(name="usuario_id", type="integer", nullable=false)
     */
    private $usuarioId;

    /**
     * @var int
     *
     * @ORM\Column(name="secuencia_registro_id", type="integer", nullable=false)
     */
    private $secuenciaRegistroId;

    /**
     * @var int
     *
     * @ORM\Column(name="cuenta_id", type="integer", nullable=false)
     */
    private $cuentaId;

    /**
     * @ORM\ManyToOne(targetEntity=Auxiliar::class, inversedBy="gestions")
     */
    private $auxiliar;

    /**
     * @ORM\ManyToOne(targetEntity=Forma::class, inversedBy="gestions")
     */
    private $forma;

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

    public function getMk(): ?bool
    {
        return $this->mk;
    }

    public function setMk(?bool $mk): self
    {
        $this->mk = $mk;

        return $this;
    }

    public function getIdInterfaz(): ?bool
    {
        return $this->idInterfaz;
    }

    public function setIdInterfaz(?bool $idInterfaz): self
    {
        $this->idInterfaz = $idInterfaz;

        return $this;
    }

    public function getIdLote(): ?int
    {
        return $this->idLote;
    }

    public function setIdLote(?int $idLote): self
    {
        $this->idLote = $idLote;

        return $this;
    }

    public function getIdControl(): ?int
    {
        return $this->idControl;
    }

    public function setIdControl(?int $idControl): self
    {
        $this->idControl = $idControl;

        return $this;
    }

    public function getFechaIngreso(): ?\DateTimeInterface
    {
        return $this->fechaIngreso;
    }

    public function setFechaIngreso(?\DateTimeInterface $fechaIngreso): self
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    public function getFechaLm(): ?\DateTimeInterface
    {
        return $this->fechaLm;
    }

    public function setFechaLm(?\DateTimeInterface $fechaLm): self
    {
        $this->fechaLm = $fechaLm;

        return $this;
    }

    public function getImporte(): ?float
    {
        return $this->importe;
    }

    public function setImporte(?float $importe): self
    {
        $this->importe = $importe;

        return $this;
    }

    public function getIdControl1(): ?string
    {
        return $this->idControl1;
    }

    public function setIdControl1(?string $idControl1): self
    {
        $this->idControl1 = $idControl1;

        return $this;
    }

    public function getIdControl2(): ?int
    {
        return $this->idControl2;
    }

    public function setIdControl2(?int $idControl2): self
    {
        $this->idControl2 = $idControl2;

        return $this;
    }

    public function getFechaControl1(): ?\DateTimeInterface
    {
        return $this->fechaControl1;
    }

    public function setFechaControl1(?\DateTimeInterface $fechaControl1): self
    {
        $this->fechaControl1 = $fechaControl1;

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

    public function getObservaciones(): ?string
    {
        return $this->observaciones;
    }

    public function setObservaciones(?string $observaciones): self
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    public function getFechaRegistro(): ?\DateTimeInterface
    {
        return $this->fechaRegistro;
    }

    public function setFechaRegistro(?\DateTimeInterface $fechaRegistro): self
    {
        $this->fechaRegistro = $fechaRegistro;

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

    public function getMarcaBanco(): ?string
    {
        return $this->marcaBanco;
    }

    public function setMarcaBanco(?string $marcaBanco): self
    {
        $this->marcaBanco = $marcaBanco;

        return $this;
    }

    public function getNumBatch(): ?int
    {
        return $this->numBatch;
    }

    public function setNumBatch(?int $numBatch): self
    {
        $this->numBatch = $numBatch;

        return $this;
    }

    public function getNumDocumento(): ?int
    {
        return $this->numDocumento;
    }

    public function setNumDocumento(?int $numDocumento): self
    {
        $this->numDocumento = $numDocumento;

        return $this;
    }

    public function getBloqueo(): ?string
    {
        return $this->bloqueo;
    }

    public function setBloqueo(?string $bloqueo): self
    {
        $this->bloqueo = $bloqueo;

        return $this;
    }

    public function getFormaId(): ?int
    {
        return $this->formaId;
    }

    public function setFormaId(int $formaId): self
    {
        $this->formaId = $formaId;

        return $this;
    }

    public function getAuxiliarId(): ?int
    {
        return $this->auxiliarId;
    }

    public function setAuxiliarId(int $auxiliarId): self
    {
        $this->auxiliarId = $auxiliarId;

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

    public function getSecuenciaRegistroId(): ?int
    {
        return $this->secuenciaRegistroId;
    }

    public function setSecuenciaRegistroId(int $secuenciaRegistroId): self
    {
        $this->secuenciaRegistroId = $secuenciaRegistroId;

        return $this;
    }

    public function getCuentaId(): ?int
    {
        return $this->cuentaId;
    }

    public function setCuentaId(int $cuentaId): self
    {
        $this->cuentaId = $cuentaId;

        return $this;
    }

    public function getAuxiliar(): ?Auxiliar
    {
        return $this->auxiliar;
    }

    public function setAuxiliar(?Auxiliar $auxiliar): self
    {
        $this->auxiliar = $auxiliar;

        return $this;
    }

    public function getForma(): ?Forma
    {
        return $this->forma;
    }

    public function setForma(?Forma $forma): self
    {
        $this->forma = $forma;

        return $this;
    }


}
