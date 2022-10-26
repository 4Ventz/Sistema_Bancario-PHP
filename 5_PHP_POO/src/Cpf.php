<?php

class Cpf
{
    private string $cpf;


    // Construct
    public function __construct(string $cpf)
    {
        // Validar formatação do Cpf
        $cpf = filter_var($cpf, FILTER_VALIDATE_REGEXP, 
            [
                'options' => 
                [
                    'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
                ]
            ]);
        
        if ($cpf ===false){
            echo "Cpf inválido";
            exit();
        }

        $this->cpf = $cpf;
    }


    // Recuperar info
    public function recuperarNumeroCpf()
    {
        return $this->cpf;
    }
}
?>