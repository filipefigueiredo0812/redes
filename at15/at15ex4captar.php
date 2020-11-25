<?php
function soma(){
    $num1 = rand(1,10);
$num2 = rand(1,10);
$num3 = rand(1,10);
$num4 = rand(1,10);
    $n1 = $_POST["n". $num1];
    $n2 = $_POST["n". $num2];
    $n3 = $_POST["n". $num3];
    $n4 = $_POST["n". $num4];   
    $soma = $n1 + $n2 + $n3 + $n4;
    echo "Soma: " .$soma. "<br><br>";
}
soma();

function media(){
    $num1 = rand(1,10);
$num2 = rand(1,10);
$num3 = rand(1,10);
$num4 = rand(1,10);
    $n1 = $_POST["n". $num1];
    $n2 = $_POST["n". $num2];
    $n3 = $_POST["n". $num3];
    $n4 = $_POST["n". $num4];   
    $media = ($n1 + $n2 + $n3 + $n4)/4;
    echo "Média: " .$media;
}

media();
?>