<?php
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco(
    'S�o Paulo',
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

echo $umEndereco->bairro; // Poss�vel gra�as ao metodo m�gico __get no arquivo Endereco.

$umEndereco->cidade = 'Nova Cidade';
echo $umEndereco;
?>