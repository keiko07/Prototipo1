<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecuenciaRegistro
 *
 * @ORM\Table(name="secuencia_registro", indexes={@ORM\Index(name="fk_secuencia_registro_usuario1_idx", columns={"usuario_id"}), @ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class SecuenciaRegistro
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
     * @var int|null
     *
     * @ORM\Column(name="id_lote", type="integer", nullable=true)
     */
    private $idLote;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_registro", type="integer", nullable=true)
     */
    private $idRegistro;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="id_interfaz", type="boolean", nullable=true)
     */
    private $idInterfaz = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_registro", type="datetime", nullable=true)
     */
    private $fechaRegistro;

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

    public function getIdLote(): ?int
    {
        return $this->idLote;
    }

    public function setIdLote(?int $idLote): self
    {
        $this->idLote = $idLote;

        return $this;
    }

    public function getIdRegistro(): ?int
    {
        return $this->idRegistro;
    }

    public function setIdRegistro(?int $idRegistro): self
    {
        $this->idRegistro = $idRegistro;

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

    public function getFechaRegistro(): ?\DateTimeInterface
    {
        return $this->fechaRegistro;
    }

    public function setFechaRegistro(?\DateTimeInterface $fechaRegistro): self
    {
        $this->fechaRegistro = $fechaRegistro;

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
