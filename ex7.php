<!-- Exercício 6
    Crie um aray associativo com as características de um carro
-->

<?php
    $pessoa = [
        "nome" => "Samuel",
        "idade" => 19,
        "profissao" => "Programador",
        "graduacao" => "Análise e Desenvolvimento de Sistemas"
    ];


    $maioridade = 18;
    if($pessoa["idade"] >= $maioridade) {
        echo "A pessoa é maior de idade!";
    }
?>