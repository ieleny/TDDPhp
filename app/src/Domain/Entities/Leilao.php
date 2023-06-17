<?php

namespace Src\Leilao\Domain\Entities;

class Leilao
{
    private $idLeilao;

    public function getIdLeilao()
    {
        return $this->idLeilao;
    }

    public function setIdLeilao($idLeilao)
    {
        return $this->idLeilao = $idLeilao;
    }

}