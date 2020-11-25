<?php

function soma(){
    $n1 = $_POST["rapazes"];
    $n2 = $_POST["raparigas"]; 
    $soma = $n1 + $n2;
    echo "Soma: " .$soma. "<br><br>";
}
soma();

function percentagem(){
    $n1 = $_POST["rapazes"];
    $n2 = $_POST["raparigas"]; 
    $soma = $n1 + $n2;
    
    $percrapazes = ($n1*100)/ $soma;
    $percraparigas = ($n2*100)/ $soma;
    
    echo "Perc. Rapazes: " .$percrapazes ."<br><br>". "Perc. Raparigas: " .$percraparigas;
}

percentagem();

?>