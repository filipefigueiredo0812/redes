<?php
    $minha_multa['carro'] = "Pálio";
    $minha_multa['valor'] = 178.00;
//alteração de valor
    $minha_multa['carro'] .= " ED 1.0";
    $minha_multa['valor'] += 20;
//exibe o array
    var_dump($minha_multa);
    echo '<br>';
    

    $comidas[] = "Lazanha";
    $comidas[] = "Pizza";
    $comidas[] = "Macarrão";
//alteração de valores
    $comidas[1] = "Pizza Calabreza";
//exibe o array
    var_dump($comidas);
    
?>