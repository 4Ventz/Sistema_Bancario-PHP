<?php

class Titular
{
    private Cpf $cpf;
    private string $nome;

    // Construct
    public function __construct(Cpf $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
    }


    // Validações
    private function validarNomeTitular(string $nomeTitular): void
    {
        if (strlen($nomeTitular) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }


    // Recupera info
    public function recuperarCpf(): string
    {
        return $this->cpf->recuperarNumeroCpf();
    }

    public function recuperarNome(): string
    {
        return $this->nome;
    }
}
?>