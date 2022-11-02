<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, Conta};
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;



$endereco = new Endereco('São Paulo', 'Aleatório', 'rua qualquer', '100');
$fulano = new Titular(new Cpf('123.456.789-10'), 'Fulano da Silva', $endereco);
$primeiraConta = new ContaCorrente($fulano);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);


$sicrana = new Titular(new Cpf('123.456.789-11'), 'Sicrana Siqueira', $endereco);
$segundaConta = new ContaPoupanca($sicrana);



$enderecobeltrano = new Endereco('Cidade1', 'Bairro1', 'rua um', '111');
$beltrano = new Titular(new Cpf('123.456.789-12'), 'Sicrana Siqueira', $enderecobeltrano);


echo $primeiraConta->recuperarSaldo() . PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;

echo $segundaConta->recuperarSaldo() . PHP_EOL;
echo $segundaConta->recuperarCpfTitular() . PHP_EOL;
echo $segundaConta->recuperarNomeTitular() . PHP_EOL;

echo Conta::recuperarNumeroDeContas() . PHP_EOL;
?>