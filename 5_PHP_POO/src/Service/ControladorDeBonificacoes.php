<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    private float $totalBonificacoes = 0;

    public function adicionarBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calcularBonificacao();
    }

    public function recuperarTotal(): float { return $this->totalBonificacoes; }
}
?>