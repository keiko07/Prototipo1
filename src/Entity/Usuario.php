<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", indexes={@ORM\Index(name="usuario", columns={"usuario"}), @ORM\Index(name="clave", columns={"clave"})})
 * @ORM\Entity
 */
class Usuario
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
     * @ORM\Column(name="usuario", type="string", length=15, nullable=true)
     */
    private $usuario;

    /**
     * @var string|null
     *
     * @ORM\Column(name="clave", type="string", length=15, nullable=true)
     */
    private $clave;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=true)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="activado", type="string", length=1, nullable=true)
     */
    private $activado;

    /**
     * @var string|null
     *
     * @ORM\Column(name="en_uso", type="string", length=1, nullable=true, options={"default"="N"})
     */
    private $enUso = 'N';

    /**
     * @var int|null
     *
     * @ORM\Column(name="cedula", type="integer", nullable=true)
     */
    private $cedula;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getClave(): ?string
    {
        return $this->clave;
    }

    public function setClave(?string $clave): self
    {
        $this->clave = $clave;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getActivado(): ?string
    {
        return $this->activado;
    }

    public function setActivado(?string $activado): self
    {
        $this->activado = $activado;

        return $this;
    }

    public function getEnUso(): ?string
    {
        return $this->enUso;
    }

    public function setEnUso(?string $enUso): self
    {
        $this->enUso = $enUso;

        return $this;
    }

    public function getCedula(): ?int
    {
        return $this->cedula;
    }

    public function setCedula(?int $cedula): self
    {
        $this->cedula = $cedula;

        return $this;
    }


}
