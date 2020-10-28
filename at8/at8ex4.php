<?php
    $pararLoop = 22;
//este for é executado indefinidamente
for($numero = 0; ; $numero++){
    if($numero == $pararLoop){
        //este break obriga a terminar o ciclo for
        break;
    }
    echo $numero. "<br>";
}
?>
