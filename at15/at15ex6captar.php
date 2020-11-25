<?php

function salario(){
    $ord = $_POST["ord"];
    $ordl = $ord - (($ord*15)/100) - (($ord*10)/100) - (($ord*5)/100);
    
    $div = ($ord*15)/100;
    $cant = ($ord*10)/100;
    $transporte = ($ord*5)/100;
    
    echo "Descontos Inerentes aos Vencimentos: " .$div ."<br><br>". "Cantina: " .$cant. "<br><br>". "Transporte: " .$transporte . "<br><br>". "Ordenado Líquido: " .$ordl;
}

salario();

?>