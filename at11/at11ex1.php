<?php
    $pais = 'Portugal';
    $paissubstr = substr($pais, 3, 2);
    $paisstrlen = strlen($pais);
    $paismaiusc = strtoupper($pais);

    echo 'O quarto e quinto caracter: ' .$paissubstr;
    echo '<br>';
    echo 'A quantidade de caracteres: ' .$paisstrlen;
    echo '<br>';
    echo 'Converter para maiúscula: ' .$paismaiusc;
    
?>