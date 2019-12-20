<?php

namespace Ieleny\casaApostas\testes;

use Ieleny\casaApostas\Model\Usuario as Usuario;

class UsuarioTeste
{

    //Verificar se o nome do usuario não vem vazio
    public function testeVerificaSeUsuarioEVazio($entrada,$resultado)
    {

        $usuario = new Usuario();
        $usuario->SetNome($entrada);

        //Verifica se o o valor do usuario é vazio
        if(empty($entrada)){
            echo "O nome do usuario está vazio";
        }

    }

    //Verificar se o nome do Usuário é Ieleny
    public function testeVerificaONomeDoUsuario($entrada,$resultado)
    {

        $usuario = new Usuario();
        $usuario->setUsuario($entrada);

        $resultadoFuncao = $usuario->getUsuario();

        //Verifica se o o valor do usuario é vazio
        if($resultadoFuncao == $resultado){
            echo "O nome do usuario e igual de {$resultado}";
        }else{
            echo "O nome do usuario e diferente de {$resultado}";
        }

    }


    //Verificar se o Tamanho do nome do usuario é maior que 8
    public function testeVerificaSeTamanho($entrada,$resultado)
    {
        //Verifica se o o valor do usuario é vazio
        if(strlen($usuario) > 8){
            echo "O nome do usuario é maior que 8";
        }

    }



}