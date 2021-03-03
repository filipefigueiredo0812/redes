<?php
    $con = new mysqli("localhost","root","","museus");
    if($con->connect_errno!=0){
        echo "Ocorreu um erro no acesso à base de dados ".$con->connect_error;
        exit;
    }
    else{
?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="ISO-8859-1">
            <title>Museus</title>
            <link rel="stylesheet" type='text/css' href="style.css">
        </head>
        <body>
            <h1>Lista de Utilizadores</h1>
            <?php
                $stm = $con->prepare('select * from utilizadores');
                $stm->execute();
                $res=$stm->get_result();
                while($resultado = $res->fetch_assoc()){
                    echo $resultado['user_name'];
                    echo '-->';
                    echo $resultado['email'];
                    echo '<br>';
                }
                $stm->close();
            ?>
            <br>
        </body>
    </html>
<?php
    }
?>