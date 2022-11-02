<?php

namespace Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Pessoa;


abstract class Funcionario extends Pessoa
{
    private float $salario;


    // Construtor
    public function __construct(string $nome, Cpf $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }


    // Getters
    public function recuperarSalario(): float { return $this->salario; }


    // Setters
    public function receberAumento(float $valorAumento): void
    {
        if ($valorAumento < 0) {
            echo "Aumento deve ser Positivo";
            return;
        }

        $this->salario += $valorAumento;
    }

    public function alterarNome(string $nome): void
    {
        $this->validarNome($nome);
        $this->nome = $nome;
    }

    abstract public function calcularBonificacao(): float;
}
?>