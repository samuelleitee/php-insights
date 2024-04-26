<?php
    // Possui apenas dois valores: True ou False
    // Alguns valores são considerados como falos: 0, 0.0, "0", [] e NULL

    echo true; // 1
    echo "<br>";
    echo false; // não imprime nada

    if(false) {
        echo "olá";
    }

    $podeEntrar = true;

    if($podeEntrar){
        echo "O usuário pode entrar";
    }
?>