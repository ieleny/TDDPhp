<?php

namespace Src\Leilao\Controller;

use Src\Leilao\Domain\Entities\Usuario as Usuario;

class UsuarioController
{
    private Usuario $usuario;

    public function __construct(Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    public function verificaSeUsuarioEVazio()
    {
        if(empty($this->usuario->getUsuario())){
            echo "O nome do usuario está vazio \n";
            return false;
        }else{
            $this->redirecionaPaginaLeilao();
        }

        return true;
    }

    public function redirecionaPaginaLeilao()
    {
       header("Location: ./../Domain/View/LeilaoView.php");
    }
}