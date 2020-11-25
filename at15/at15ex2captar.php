<?php


function soma(){
    $n1 = $_POST["n1"];
$n2 = $_POST["n2"];
    $soma = $n1 + $n2;
    echo "Soma: " .$soma. "<br><br>";
}
function subtracao(){
    $n1 = $_POST["n1"];
$n2 = $_POST["n2"];
    $sub = $n1-$n2;
    echo "Subtração: " .$sub. "<br><br>";
}
function multiplicacao(){
    $n1 = $_POST["n1"];
$n2 = $_POST["n2"];
    $mult = $n1 * $n2;
    echo "Multiplicação: " .$mult. "<br><br>";
}
function divisao(){
    $n1 = $_POST["n1"];
$n2 = $_POST["n2"];
    $div = $n1/$n2;
    echo "Divisão: " .$div. "<br><br>";
}

soma();
subtracao();
multiplicacao();
divisao();

?>