<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cias1
 *
 * @ORM\Table(name="Cias1")
 * @ORM\Entity
 */
class Cias1
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Activado", type="string", length=1, nullable=true)
     */
    private $activado;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descripcion", type="string", length=50, nullable=true)
     */
    private $descripcion;

    public function getId(): ?string
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


}
