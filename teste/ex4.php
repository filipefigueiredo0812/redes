<?php
        
        
        $num= array();
        for($i=0; $i<20; $i++){
            $num[$i]=rand(1,10000);
        }

        echo "<h3>Ex4</h3>";
        
        foreach ($num as $n){
            echo $n. " ";
        }

        $maior = $num[0];
        $menor = $num[0];

        foreach ($num as $n){
            if($maior<$n){
                $maior = $n;
            }
        }

        foreach ($num as $n){
            if($menor>$n){
                $menor = $n;
            }
        }
        echo "<br><br>";
        
        echo "Maior: " .$maior. "<br><br>";

        echo "Menor: " .$menor;
        
        echo "<br><br>";
        
        $soma = 0;
        $prod = 1;
        
        foreach ($num as $n){
            $prod = $prod + $n;
        }
        
        foreach ($num as $n){
            $soma = $soma + $n;
        }

        $media = $soma/20;

        echo "<br><br>";

        echo "Produto: " .$prod. "<br><br>";

        echo "Média: " .$media;

        
            
        
        
echo "<a href='index.php'><h5><b>Ex1</b></h5></a>";
echo "<a href='Ex2.php'><h5><b>Ex2</b></h5></a>";
echo "<a href='Ex3.php'><h5><b>Ex3</b></h5></a>";
?>
    