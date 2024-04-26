<?php
    // Checa se um valor é inteiro
    if(is_int(5)){ // TRUE
        echo "É um inteiro <br>";
    }
    
    if(is_int("Texto")){ // FALSE
        echo "É um inteiro <br>";
    }

    $numero = 10;

    if(is_int($numero)){ // TRUE
        echo "É um inteiro <br>";
    }
?>