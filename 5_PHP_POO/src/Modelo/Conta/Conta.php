<?php

namespace Alura\Banco\Modelo\Conta;
use Alura\Banco\Modelo\Pessoa;

abstract class Conta
{
    private Titular $titular;
    protected float $saldo;
    private static $numeroDeContas = 0;


    //Construct
    public function __construct(Titular $titular)
    {
        echo "Criando nova conta" . PHP_EOL;

        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }


    // Destruct
    public function __destruct()
    {
        self::$numeroDeContas--;
    }


    // Ações Sacar, Depositar e Transferir
    public function sacar(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();        
        $valorSaque = $valorASacar + $tarifaSaque;

        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "O valor a depositar precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    
    //Retorna informações
    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperarNomeTitular(): string
    {
        return $this->titular->recuperarNome();
    }

    public function recuperarCpfTitular(): string
    {
        return $this->titular->recuperarCpf();
    }

    public static function recuperarNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa(): float;
}

?>