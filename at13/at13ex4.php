<?php
    function parimpar($n){
        if($n % 2==0){
           return true;
        }
        else{
           return 0;
        }
    }
    $valor = rand(1,100);
    echo "$valor";
    echo '<br>';
    $num = parimpar($valor);
    echo "$num";


?>
