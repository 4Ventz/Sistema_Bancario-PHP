<?php

namespace Alura\Banco\Modelo;

// Anotações
// @property-read são propriedades que apenas podemos ler
//
/**
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */

final class Endereco
{
    use AcessoPropriedades;

    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;


    // Construct
    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }


    // Retorna info
    public function recuperarCidade() { return $this->cidade; }
    public function recuperarBairro() { return $this->bairro; }
    public function recuperarRua() { return $this->rua; }
    public function recuperarNumero() { return $this->numero; }

    // Representa qualquer objeto como uma string
    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }


    // __get é chamado sempre que um atributo/propriedade for acessada sem que tenhamos acesso, ou seja, um atributo que não existe ou é privado
   public function __get(string $nomeAtributo)
   {
       // ucfirst -> Retorna a primeira letra da variável como maiúscula
       // $metodo -> adiciona 'recupera' no inicio da str e retorna a primeira letra da variável $nomeAtributo como maiúscula
       $metodo = 'recuperar' . ucfirst($nomeAtributo);
       return $this->$metodo();
   }

   public function alterarCidade($novaCidade) { return $this->cidade = $novaCidade; }
   public function alterarBairro($novaBairro) { return $this->bairro = $novaBairro; }
   public function alterarRua($novaRua) { return $this->rua = $novaRua; }
   public function alterarNumero($novoNumero) { return $this->numero = $novoNumero; }

   public function __set($nomeAtributo, $valor)
   {
       $metodo = 'alterar' . ucfirst($nomeAtributo);
       return $this->$metodo($valor);
   }
}
?>