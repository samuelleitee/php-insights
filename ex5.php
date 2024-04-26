<!-- Exercício 5
    Imprima textos com aspas simples e com aspas duplas e verifique se são string
-->

<?php
    $aspas_simples = 'Texto com aspas simples';
    $aspas_duplas = 'Texto com aspas duplas';

    if (is_string($aspas_simples)){
        echo "$aspas_simples <br>";
    }

    if (is_string($aspas_duplas)){
        echo "$aspas_duplas <br>";
    }
?>