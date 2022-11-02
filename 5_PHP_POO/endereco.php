<?php
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco(
    'São Paulo',
    'Qualquer',
    'rua 123',
    '71B'
    );

$outroEndereco = new Endereco(
    'Rio de Janeiro',
    'Vitoria',
    'Aquela esquina',
    '444'
    );

echo $umEndereco->bairro; // Possível graças ao metodo mágico __get no arquivo Endereco.

$umEndereco->cidade = 'Nova Cidade';
echo $umEndereco;
?>