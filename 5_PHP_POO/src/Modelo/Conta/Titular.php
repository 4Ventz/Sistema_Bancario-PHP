<?php

// Contrabarra é utilizada para a separação de namespace no php
namespace Alura\Banco\Modelo\Conta;
use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;

class Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    // Construct
    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }


    // Recupera info
    public function recuperarEndereco()
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}
?>