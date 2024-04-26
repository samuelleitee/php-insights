<?php
    // is_string()

    $str = "Samuel";
    $num = 10;

    if(is_string($str)){
        echo "$str é uma string <br>";
    }

    if(is_string($num)){
        echo "$num é uma string <br>";
    }

    if(is_string("String")){
        echo "É uma string <br>";
    }
?>