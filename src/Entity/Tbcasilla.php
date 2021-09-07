<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tbcasilla
 *
 * @ORM\Table(name="TbCasilla")
 * @ORM\Entity
 */
class Tbcasilla
{
    /**
     * @var string
     *
     * @ORM\Column(name="UsuarioCasilla", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $usuariocasilla;

    public function getUsuariocasilla(): ?string
    {
        return $this->usuariocasilla;
    }


}
