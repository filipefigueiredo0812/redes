<?php
    $con = new mysqli("localhost","root","","filmes");
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
            <title>Filmes</title>
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