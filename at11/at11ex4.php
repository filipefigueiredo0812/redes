<?php
    $a = array("a"=>"maçã","b"=>"banana");
    $b = array("a"=>"kiwi","b"=>"ananás","c"=>"morango");

    echo "<h1>Array A: <br></h1>";
    print_r($a);
    echo "<br>";

    echo "<h1>Array B: <br></h1>";
    print_r($b);
    echo "<br>";

    $ab = array_merge($a,$b);
    echo "<h1>Array A e B Unidas: <br></h1>";
    print_r($ab);
    echo "<br>";
    $ba = array_merge($b,$a);
    echo "<h1>Array B e A Unidas: <br></h1>";
    print_r($ba);
?>