<?php
        $nota1 = rand(1,20);
        $nota2 = rand(1,20);
        $nota3 = rand(1,20);
$media = ($nota1 + $nota2 + $nota3)/3;
        echo ' A média da nota dos três alunos é <span style="color:#0000cc">'. $media;
        echo '<br>';
        if($media <= 8){
                echo 'O aluno reprovou';
        }
        if($media > 8 && $media <= 9.4 ){
                echo 'O aluno irá a recuperação';
        }
        if($media >= 9.5 && $media <= 20){
                echo 'O aluno aprovou';
        }
        echo '<br>';
        echo '<br>';
    
?>