<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$guydo = new Titular(new Cpf('123.456.789-10'), 'Guydo Ventura');
$primeiraConta = new Conta($guydo);

$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

$fulano = new Titular(new Cpf('123.456.789-11'), 'Fulano da Silva');
$segundaConta = new Conta($fulano);

$sicrano = new Titular(new Cpf('123.456.789-12'), 'Sicrano Siqueira');

echo $primeiraConta->recuperarSaldo() . PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;

echo $segundaConta->recuperarSaldo() . PHP_EOL;
echo $segundaConta->recuperarCpfTitular() . PHP_EOL;
echo $segundaConta->recuperarNomeTitular() . PHP_EOL;

echo Conta::recuperarNumeroDeContas() . PHP_EOL;
?>