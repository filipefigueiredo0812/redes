<?php 
    session_start();
    $con=new mysqli("localhost","root","","filmes");
    if($con->connect_error!=0){
        echo"Ocorreu um erro ".$con->connect_error;
        exit;
    }else{
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="ISO-8859-1">
        <title>filmes</title>
        </head>
        <body>
        <h1> Lista de filmes</h1>
            <?php
                $stm=$con->prepare('select * from filmes');
                $stm->execute();
                $res=$stm->get_result();
                while($resultado=$res->fetch_assoc()){
                    echo '<a href="filmes_show.php?filme='.$resultado['id_filme'].'">';
                    echo $resultado['titulo'];
                    echo'</a>';
                    echo '<br>';
                }
                $stm->close();
            ?>
        <br>
        <button> <a href="filmes_create.php">Adicionar</a></button>
        <?php
           if($_SESSION['login']== "correto" && isset($_SESSION['login'])){
               echo"<p><a href='processa_logout.php'>Logout</a>     <a href='utilizadores.php'>Lista Utilizadores</a>------";
            }
            else{
                echo" <p><a href='login.php'>Login</a>     <a href='register.php'>Register</a></p>";
            }
        ?>
        </body>
        </html>
        <?php 
        }
?>