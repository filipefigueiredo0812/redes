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
        <link rel="stylesheet" type='text/css' href="style.css">
        <title>filmes</title>
        </head>
        <body>
        <h1> Lista de atores</h1>
            <?php
                $atores=$con->prepare('select * from atores');
                $atores->execute();
                $ator=$atores->get_result();
                echo"<br>Atores: ";
                while($r=$ator->fetch_assoc()){
                    echo '<br><br><a href="atores_show.php?ator='.$r['id_ator'].'">';
                    echo $r['nome'];
                    echo'</a>';
                    echo '<br>';
                }
                echo "<br>";
                $stm = $con->prepare('select * from utilizadores');
                $stm->execute();
                $res=$stm->get_result();
                 while($resultado = $res->fetch_assoc()){
                    if(empty($_SESSION['id_user'])){

                    }
                    elseif($resultado['id'] == $_SESSION['id_user'])
                        echo '<br><a href="utilizadores_edit.php?utilizadores='.$resultado['id'].'">Editar Utilizador</a><br>';
                    }
            ?>
        <br>
        <?php
            echo "<button class='button4'> <a href='index.php'>Filmes</a></button><br><br>";
            echo "<button class='button4'> <a href='realizadores_index.php'>Realizadores</a></button><br><br>";
            $a=0;
            if(!empty($_SESSION['login'])){  
                if($_SESSION['login']== "correto"){
                    $a=1;
                }
            }
            if($a==1){ 
                echo"<button class='button4'> <a href='atores_create.php'>Adicionar Ator</a></button><br><br>";
                echo"<button class='button4'><a href='processa_logout.php'>Logout</a></button>    <button class='button4'><a href='utilizadores.php'>Lista Utilizadores</a></button>";
            }
            else{
                echo"<button class='button4'><a href='login.php'>Login</a></button>    <button class='button4'><a href='register.php'>Register</a></button>";
            }
        ?>
        </body>
        </html>
        <?php 
        }
?>