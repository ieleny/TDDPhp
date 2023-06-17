<?php

namespace Src\Leilao\Domain\Entities;

class Lance
{
    private $valorLance;

    public function getValorLance()
    {
        return $this->valorLance;
    }

    public function setValorLance($valorLance)
    {
        return $this->valorLance = $valorLance;
    }

}