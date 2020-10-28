<?php
        $valor = rand(0,100);
        $soma=0;
        while($soma < 1000){
           $soma = $soma + $valor;
           $valor = rand(0,100);
        }
        echo $soma;
?>