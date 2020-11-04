<?php
    $matris = array(
        array(0,0),
        array(1,0),
        array(2,0),
        array(3,0),
        array(4,0),
        array(5,1),
        array(6,1),
        array(7,1),
        array(8,1),
        array(9,1),
    );

    $maior = 0;
    $soma = 0;
    $maior2 = $matris[0][0];

    foreach ($matris as $valor){
	foreach($valor as $key=>$valor1){
		if ($valor1 > $maior)
	 	    {
                $maior = $valor1;
    	    }
	    }   	
    }

    for ($linha=0; $linha<10; $linha++) {
        for ($coluna=0; $coluna<2; $coluna++) {
            if($maior2 < $matris[$linha][$coluna] && $matris[$linha][$coluna]<$maior){
                $maior2 = $matris[$linha][$coluna];
            }
            $soma += $matris[$linha][$coluna];
        }
    }

    echo "Maior:" .$maior. "<br>";
    echo "Soma:" .$soma. "<br>";
    echo "Segundo maior:" .$maior2;
?>