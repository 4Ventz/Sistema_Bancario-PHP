<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    use AcessoPropriedades;

    protected string $nome;
    private Cpf $cpf;

    // Contrutor
   public function __construct(string $nome, Cpf $cpf)
   {
       $this->validarNome($nome);
       $this->nome = $nome;
       $this->cpf = $cpf;
   }


   // Validações
   final public function validarNome(string $nomeTitular): void
   {
       if (strlen($nomeTitular) < 5){
           echo "Nome precisa ter pelo menos 5 caracteres";
           exit();
       }
   }


   // Getters
   public function recuperarNome():string { return $this->nome; }

   public function recuperarCpf(): string
   {
       return $this->cpf->recuperarNumeroCpf();
   }
}
?>