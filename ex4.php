<!-- Exercício 4
    Imprima três números inteiros na tela e utilize a função is_float para verificar
-->

<?php
    echo 1.1;
    echo "<br>";
    echo 2.2;
    echo "<br>";
    echo 3.3;
    echo "<br>";    

    $numero = -4.4;

    if(is_float($numero)) {
        echo "Sim, podemos ter floats negativos!";
    }
?>