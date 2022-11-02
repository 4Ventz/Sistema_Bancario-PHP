<?php
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\{Diretor,Gerente};
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Gerente(
    'João da Silva',
    new Cpf('123.456.789-20'),
    10000
    );

$autenticador->tentarLogin($umDiretor, '4321');
?>