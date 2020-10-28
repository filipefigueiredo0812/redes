<?php
    
   $num = rand(1, 10);
echo 'Tabuada do ' .$num;
echo '<br>';
    $x = 1;
    while($x <= 10){
        $res = $x * $num;
        echo $num. ' x ' .$x. " = " .$res. '<br>';
        $x++;
    }
?>
