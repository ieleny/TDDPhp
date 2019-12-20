<?php

use Ieleny\casaApostas\testes\UsuarioTeste as UsuarioTeste;

require 'vendor/autoload.php';

$teste = new UsuarioTeste();
$teste->testeVerificaONomeDoUsuario('Ieleny','Ieleny');