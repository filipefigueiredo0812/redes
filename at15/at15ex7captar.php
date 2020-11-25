<?php

function idade(){
    if($_POST["idade"] < 18){
        echo "Voce tem ". $_POST["idade"] ." anos - é MENOR de idade";
    }
    
    if($_POST["idade"] >= 18 && $_POST["idade"]<=100){
        echo "Voce tem ". $_POST["idade"] ." anos - é MAIOR de idade";
    }
    if($_POST["idade"] > 100){
        echo "Voce é um Dinossauro";
    }
}

idade();

?>