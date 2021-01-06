<?php

        $num= array();
        for($i=0; $i<15; $i++){
            $num[$i]=rand(1,1000);
        }

        $pos = rand(0,14);

        echo "<h3>Ex3</h3>";

        foreach ($num as $n){
            echo $n. " ";
        }
        echo "<br><br>";

        echo $pos. "<br><br>";

        echo $num[$pos]. "<br><br>";

        if($num[$pos]%2 != 0){
            echo "Impar";
        }
        else{
            echo "Par";
        }
            
        
        
echo "<a href='index.php'><h5><b>Ex1</b></h5></a>";
echo "<a href='Ex2.php'><h5><b>Ex2</b></h5></a>";
echo "<a href='Ex4.php'><h5><b>Ex4</b></h5></a>";
?>
    