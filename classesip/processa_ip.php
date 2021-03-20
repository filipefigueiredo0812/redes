<?php
    include "css.php";
    if($_GET['a'] <= 255 && $_GET['b'] <= 255 && $_GET['c'] <= 255 && $_GET['d'] <= 255 && $_GET['a'] >= 0 && $_GET['b'] >= 0 && $_GET['c'] >= 0 && $_GET['d'] >= 0){
        $ip = array(
            'a' => $_GET['a'],
            'b' => $_GET['b'],
            'c' => $_GET['c'],
            'd' => $_GET['d'],
        );
    }
    else{
        echo "Ip Inválido";
        return;
    }
    $ip = implode(".",$ip);
    function ip_in_range($abaixo, $acima, $meio)
    {
        $min = ip2long($abaixo);
        $max = ip2long($acima);
        $meio = ip2long($meio);            

        if(($meio >= $min) AND ($meio <= $max)){
            echo "Ip Publico";
        }
        else if($meio<$min AND $meio > $max){
            echo "Ip Reservado";
        }
    }    
    ip_in_range("1.0.0.1", "126.255.255.254", $ip);
    ip_in_range("128.1.0.1", "191.255.255.254", $ip);
    ip_in_range("192.0.0.1", "223.255.255.254", $ip);
    ip_in_range("224.0.0.1", "239.255.255.254", $ip);
    ip_in_range("240.0.0.1", "254.255.255.254", $ip);