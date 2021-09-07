<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permiso
 *
 * @ORM\Table(name="permiso", indexes={@ORM\Index(name="modulo", columns={"modulo"}), @ORM\Index(name="fk_permiso_usuario1_idx", columns={"usuario_id"}), @ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Permiso
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
     * @ORM\Column(name="modulo", type="string", length=50, nullable=true)
     */
    private $modulo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="permiso", type="string", length=1, nullable=true)
     */
    private $permiso;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nota", type="string", length=255, nullable=true)
     */
    private $nota;

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

    public function getModulo(): ?string
    {
        return $this->modulo;
    }

    public function setModulo(?string $modulo): self
    {
        $this->modulo = $modulo;

        return $this;
    }

    public function getPermiso(): ?string
    {
        return $this->permiso;
    }

    public function setPermiso(?string $permiso): self
    {
        $this->permiso = $permiso;

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
