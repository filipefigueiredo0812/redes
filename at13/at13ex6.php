<?php
    function percentagem($nRaparigas, $nRapazes){
        $total = $nRaparigas + $nRapazes;
        $pRapazes = ($nRapazes / $total) * 100;
        $pRaparigas = ($nRaparigas / $total) * 100;
        echo "Nº Total de Alunos: $total <br>";
        echo "Nº Rapazes: $nRapazes <br>";
        echo "Nº Raparigas: $nRaparigas <br>";
        echo "Percentagem de raparigas: $pRaparigas<br>";
        echo "Percentagem de rapazes: $pRapazes<br>";
    }
    $rapazes = rand(0,14);
    $raparigas = rand(0,14);
    percentagem($rapazes, $raparigas);
?>