<?php

namespace Ieleny\casaApostas\Tests;

use Ieleny\casaApostas\Model\Usuario as Usuario;
use PHPUnit\Framework\TestCase;

class UsuarioTeste extends TestCase
{
    //Verificar se o nome do usuario não vem vazio
    public function testeVerificaSeUsuarioEVazio($entrada='Ieleny',$resultado='Ieleny')
    {
        $usuario = new Usuario();

        //Verifica se o o valor do usuario é vazio
        if(empty($entrada)){
            echo "O nome do usuario está vazio \n";
        }

        $this->assertTrue(!empty($entrada));
    }

    //Verificar se o nome do Usuário é Ieleny
    public function testeVerificaONomeDoUsuario($entrada='Ieleny',$resultado='Ieleny')
    {

        $usuario = new Usuario();
        $usuario->setUsuario($entrada);

        $resultadoFuncao = $usuario->getUsuario();

        //Verifica se o o valor do usuario é vazio
        if($resultadoFuncao == $resultado){
            echo "O nome do usuario e igual de {$resultado} \n";
        }else{
            echo "O nome do usuario e diferente de {$resultado} \n";
        }

        $this->assertTrue($resultadoFuncao == $resultado);
    }


    //Verificar se o Tamanho do nome do usuario é maior que 8
    public function testeVerificaSeTamanho($usuario='Ieleny1232454')
    {
        $tamanhoUsuario = strlen($usuario);

        //Verifica se o o valor do usuario é vazio
        if($tamanhoUsuario > 8){
            echo "O nome do usuario é maior que 8 \n";
        }else{
            echo "O tamanho do nome deve ser maior que 8 \n";
        }

        $this->assertTrue($tamanhoUsuario > 8);
    }


}