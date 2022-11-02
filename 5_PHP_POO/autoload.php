<?php

// A função a seguir transforma a string Alura\Banco\Modelo\Endereco em src/Modelo/Endereco.php, assim indicando o caminho da classe para a função autoload.
// O símbolo \\ serve para impedir que escapemos acidentalmente a string;

spl_autoload_register(function (string $nomeCompletoDaClasse) {
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

    if (file_exists($caminhoArquivo)){
        require_once $caminhoArquivo;
    }
});

?>