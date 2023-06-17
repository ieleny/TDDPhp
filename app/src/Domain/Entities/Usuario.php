<?php

namespace Src\Leilao\Domain\Entities;

class Usuario
{
    private $usuario;

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        return $this->usuario = $usuario;
    }

}