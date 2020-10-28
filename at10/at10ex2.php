<?php
    $a = array('Tesla', 2000, 3.0, 'BMW', 'Fiat');
echo $a[1];
$a[1]=2020;
echo '<br>';
echo $a[1];
$a[]="Vila das Aves";
$a[]="AEDAH";
echo '<br>';
echo '<br>';
foreach ($a as $item){
    echo $item. '<br>';
}
?>