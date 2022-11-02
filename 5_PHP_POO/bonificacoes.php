<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor, EditorVideo};
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor(
    'Vinicius Dias',
    new Cpf ('123.456.789-14'),
    1000
    );

$umaFuncionaria = new Gerente(
    'Patricia',
    new Cpf ('123.456.789-15'),
    3000
    );

$umDiretor = new Diretor(
    'Fulano Sicrano',
    new CPF ('123.456.789-16'),
   5000
   );

$umEditorVideo = new EditorVideo(
    'Jose Pereira',
    new Cpf ('123.456.789-17'),
    1500
    );

$controlador = new ControladorDeBonificacoes();
$controlador->adicionarBonificacaoDe($umFuncionario);
$controlador->adicionarBonificacaoDe($umaFuncionaria);
$controlador->adicionarBonificacaoDe($umDiretor);
$controlador->adicionarBonificacaoDe($umEditorVideo);


echo $controlador->recuperarTotal();
?>