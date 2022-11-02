<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Conta, ContaPoupanca,ContaCorrente, Titular};
use Alura\Banco\Modelo\{Cpf, Endereco};


$conta = new ContaPoupanca
(
    new Titular
    (
        new Cpf('123.456.789-13'),
           'Joaquim',
           new Endereco('Cidade2', 'Bairro2', 'Rua2', '123'),
    ),
);

$conta->depositar(500);
$conta->sacar(100);

echo $conta->recuperarSaldo() . PHP_EOL;