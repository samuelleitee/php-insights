<!-- Case-Sensitivity 
    Diferenciação entre letras maiúsculas e minúsculas

    Para instruções, não existe essa diferença. Ex: echo = ECHO

    Para variáveis, há essa diferença, ou seja, $nome != $NOME
 -->

 <?php 
    // Não é case-sensitive  
    echo "Teste 1 <br>";    
    ECHO "Teste 2 <br>";    
    eChO "Teste 3 <br>";    

    // É case-sensitive  
    $nome = "Samuel";
    $NOME = "Ana";

    echo $nome;
    echo "<br>";
    echo $NOME;
?>