<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auditoria
 *
 * @ORM\Table(name="auditoria", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Auditoria
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
     * @ORM\Column(name="id_interfaz", type="boolean", nullable=true)
     */
    private $idInterfaz = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="programa", type="string", length=10, nullable=true)
     */
    private $programa;

    /**
     * @var float|null
     *
     * @ORM\Column(name="id_registro", type="float", precision=10, scale=0, nullable=true)
     */
    private $idRegistro;

    /**
     * @var string|null
     *
     * @ORM\Column(name="campo_cambiado", type="string", length=30, nullable=true)
     */
    private $campoCambiado;

    /**
     * @var string|null
     *
     * @ORM\Column(name="campo_cambiado_de", type="text", length=0, nullable=true)
     */
    private $campoCambiadoDe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="campo_cambiado_a", type="text", length=0, nullable=true)
     */
    private $campoCambiadoA;

    /**
     * @var string|null
     *
     * @ORM\Column(name="usuario", type="string", length=15, nullable=true)
     */
    private $usuario;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre_equipo", type="string", length=15, nullable=true)
     */
    private $nombreEquipo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_modificacion", type="datetime", nullable=true)
     */
    private $fechaModificacion;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPrograma(): ?string
    {
        return $this->programa;
    }

    public function setPrograma(?string $programa): self
    {
        $this->programa = $programa;

        return $this;
    }

    public function getIdRegistro(): ?float
    {
        return $this->idRegistro;
    }

    public function setIdRegistro(?float $idRegistro): self
    {
        $this->idRegistro = $idRegistro;

        return $this;
    }

    public function getCampoCambiado(): ?string
    {
        return $this->campoCambiado;
    }

    public function setCampoCambiado(?string $campoCambiado): self
    {
        $this->campoCambiado = $campoCambiado;

        return $this;
    }

    public function getCampoCambiadoDe(): ?string
    {
        return $this->campoCambiadoDe;
    }

    public function setCampoCambiadoDe(?string $campoCambiadoDe): self
    {
        $this->campoCambiadoDe = $campoCambiadoDe;

        return $this;
    }

    public function getCampoCambiadoA(): ?string
    {
        return $this->campoCambiadoA;
    }

    public function setCampoCambiadoA(?string $campoCambiadoA): self
    {
        $this->campoCambiadoA = $campoCambiadoA;

        return $this;
    }

    public function getUsuario(): ?string
    {
        return $this->usuario;
    }

    public function setUsuario(?string $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getNombreEquipo(): ?string
    {
        return $this->nombreEquipo;
    }

    public function setNombreEquipo(?string $nombreEquipo): self
    {
        $this->nombreEquipo = $nombreEquipo;

        return $this;
    }

    public function getFechaModificacion(): ?\DateTimeInterface
    {
        return $this->fechaModificacion;
    }

    public function setFechaModificacion(?\DateTimeInterface $fechaModificacion): self
    {
        $this->fechaModificacion = $fechaModificacion;

        return $this;
    }


}
