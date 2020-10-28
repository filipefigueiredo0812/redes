<?php
    $numero = 50;
    switch ($numero) {
        case ($numero > 100):
            print ('Valor muito alto');
            break;
    
        case ($numero < 80 && $numero > 51):
            print ('Valor médio');
            break;
    
        case ($numero === 50):
            print ('Valor perfeito');
            break;
    
        case ($numero <= 10):
            print ('Valor muito baixo');
            break;
    
        case ($numero === 0):
            print ('Sem valor');
            break;
    }
?>