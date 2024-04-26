<?php
    // Checa se um valor é float
    if(is_float(5)){ // 
        echo "É um float <br>";
    }
    
    if(is_float("Texto")){ // FALSE
        echo "É um float <br>";
    }

    $numero = 10;

    if(is_float($numero)){ // TRUE
        echo "É um float <br>";
    }
?>