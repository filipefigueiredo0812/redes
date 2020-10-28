<!DOCTYPE html>
<html>
<head>
	<title>Teste PHP</title>
</head>
	<body>
        
        <?php //Exemplos de frases// ?>
        
		<?php echo "<h1>Olá mundo!</h1>"; ?>
        <?php print "Olá,<br> Vila das Aves"; ?>
        
        <?php //Exemplos de comentários// ?>
        
        <?php //comentário numa linha ?>
        <?php 
        /*comentários 
        em várias 
        linhas */
        ?>
        
        <?php //Exemplos de variáveis// ?>
        
        <?php
        $numero = 20;
        echo $numero;
        
        $numero = "segunda-feira";
        echo $numero;
        ?>
        
        
        <br>
        
        <?php
        $numero = 20;
        $numero2 = 200;
        
        $soma = $numero + $numero2;
        echo $soma;
        ?>
    
	</body>
</html>