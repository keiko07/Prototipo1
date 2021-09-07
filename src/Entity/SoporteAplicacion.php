<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SoporteAplicacion
 *
 * @ORM\Table(name="soporte_aplicacion", indexes={@ORM\Index(name="fk_soporte_aplicacion_remesa1_idx", columns={"remesa_id"}), @ORM\Index(name="fk_soporte_aplicacion_cuenta1_idx", columns={"cuenta_id"}), @ORM\Index(name="id", columns={"id"}), @ORM\Index(name="fk_soporte_aplicacion_forma1_idx", columns={"forma_id"}), @ORM\Index(name="fk_soporte_aplicacion_usuario1_idx", columns={"usuario_id"})})
 * @ORM\Entity
 */
class SoporteAplicacion
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
     * @var int|null
     *
     * @ORM\Column(name="importe_soporte", type="integer", nullable=true)
     */
    private $importeSoporte = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_soporte", type="datetime", nullable=true)
     */
    private $fechaSoporte;

    /**
     * @var int|null
     *
     * @ORM\Column(name="importe_niquel", type="integer", nullable=true)
     */
    private $importeNiquel = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="importe_otros", type="integer", nullable=true)
     */
    private $importeOtros = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="importe_aplicar", type="integer", nullable=true)
     */
    private $importeAplicar = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="importe_aplicado_rm", type="integer", nullable=true)
     */
    private $importeAplicadoRm = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="importe_aplicado", type="integer", nullable=true)
     */
    private $importeAplicado = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_aplicaciÃ³n", type="datetime", nullable=true)
     */
    private $fechaAplicaciÃ³n;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nota", type="text", length=0, nullable=true)
     */
    private $nota;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_actualizacion", type="datetime", nullable=true)
     */
    private $fechaActualizacion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bloqueo", type="string", length=1, nullable=true, options={"default"="N"})
     */
    private $bloqueo = 'N';

    /**
     * @var int
     *
     * @ORM\Column(name="remesa_id", type="integer", nullable=false)
     */
    private $remesaId;

    /**
     * @var int
     *
     * @ORM\Column(name="forma_id", type="integer", nullable=false)
     */
    private $formaId;

    /**
     * @var int
     *
     * @ORM\Column(name="cuenta_id", type="integer", nullable=false)
     */
    private $cuentaId;

    /**
     * @var int
     *
     * @ORM\Column(name="usuario_id", type="integer", nullable=false)
     */
    private $usuarioId;

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

    public function getImporteSoporte(): ?int
    {
        return $this->importeSoporte;
    }

    public function setImporteSoporte(?int $importeSoporte): self
    {
        $this->importeSoporte = $importeSoporte;

        return $this;
    }

    public function getFechaSoporte(): ?\DateTimeInterface
    {
        return $this->fechaSoporte;
    }

    public function setFechaSoporte(?\DateTimeInterface $fechaSoporte): self
    {
        $this->fechaSoporte = $fechaSoporte;

        return $this;
    }

    public function getImporteNiquel(): ?int
    {
        return $this->importeNiquel;
    }

    public function setImporteNiquel(?int $importeNiquel): self
    {
        $this->importeNiquel = $importeNiquel;

        return $this;
    }

    public function getImporteOtros(): ?int
    {
        return $this->importeOtros;
    }

    public function setImporteOtros(?int $importeOtros): self
    {
        $this->importeOtros = $importeOtros;

        return $this;
    }

    public function getImporteAplicar(): ?int
    {
        return $this->importeAplicar;
    }

    public function setImporteAplicar(?int $importeAplicar): self
    {
        $this->importeAplicar = $importeAplicar;

        return $this;
    }

    public function getImporteAplicadoRm(): ?int
    {
        return $this->importeAplicadoRm;
    }

    public function setImporteAplicadoRm(?int $importeAplicadoRm): self
    {
        $this->importeAplicadoRm = $importeAplicadoRm;

        return $this;
    }

    public function getImporteAplicado(): ?int
    {
        return $this->importeAplicado;
    }

    public function setImporteAplicado(?int $importeAplicado): self
    {
        $this->importeAplicado = $importeAplicado;

        return $this;
    }

    public function getFechaAplicaciÃ³n(): ?\DateTimeInterface
    {
        return $this->fechaAplicaciÃ³n;
    }

    public function setFechaAplicaciÃ³n(?\DateTimeInterface $fechaAplicaciÃ³n): self
    {
        $this->fechaAplicaciÃ³n = $fechaAplicaciÃ³n;

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

    public function getFechaActualizacion(): ?\DateTimeInterface
    {
        return $this->fechaActualizacion;
    }

    public function setFechaActualizacion(?\DateTimeInterface $fechaActualizacion): self
    {
        $this->fechaActualizacion = $fechaActualizacion;

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

    public function getRemesaId(): ?int
    {
        return $this->remesaId;
    }

    public function setRemesaId(int $remesaId): self
    {
        $this->remesaId = $remesaId;

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

    public function getCuentaId(): ?int
    {
        return $this->cuentaId;
    }

    public function setCuentaId(int $cuentaId): self
    {
        $this->cuentaId = $cuentaId;

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


}
