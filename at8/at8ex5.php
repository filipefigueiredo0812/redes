<?php
    
    //tabuada do 5
echo 'Tabluada do 5';
echo '<br>';
    $x = 1;
    while($x <= 10){
        $res = $x * 5;
        echo '5 x ' .$x. " = " .$res. '<br>';
        $x++;
    }
echo '<br>';
echo '<br>';
echo '<br>';
//tabuada do 9
echo 'Tabluada do 9';
echo '<br>';
    $x = 1;
    do{
        $res = $x * 9;
        echo '9 x ' .$x. " = " .$res. '<br>';
        $x++;
    }
    while ($x <= 10);
?>
