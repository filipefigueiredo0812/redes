<?php
        $num1 = rand(1,100);
        $num2 = rand(1,100);
        $num3 = rand(1,100);
        echo 'Os três números são, respetivamente, '. $num1 .' '. $num2 .' '. $num3;
        echo '<br>';

        echo 'O maior número é ' .max($num1, $num2, $num3);
        echo '<br>';
        echo 'O menor número é ' .min($num1, $num2, $num3);;
?>