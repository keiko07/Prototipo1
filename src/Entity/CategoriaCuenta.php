<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriaCuenta
 *
 * @ORM\Table(name="categoria_cuenta")
 * @ORM\Entity
 */
class CategoriaCuenta
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
     * @ORM\Column(name="activado", type="string", length=1, nullable=true)
     */
    private $activado;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="string", length=50, nullable=true)
     */
    private $descripcion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nota", type="text", length=0, nullable=true)
     */
    private $nota;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;

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


}
