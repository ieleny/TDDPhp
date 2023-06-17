<?php

require '../../vendor/autoload.php';

use Src\Leilao\Domain\Entities\Usuario as Usuario;
use Src\Leilao\Controller\UsuarioController as UsuarioController;

$usuario = new Usuario();
$usuario->setUsuario($_POST['username']); 

$usuarioController = new UsuarioController($usuario);
$usuarioController->verificaSeUsuarioEVazio();