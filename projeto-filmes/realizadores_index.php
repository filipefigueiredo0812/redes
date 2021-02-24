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
        <link rel="stylesheet" type='text/css' href="style.css">
        </head>
        <body>
        <h1> Lista de realizadores</h1>
            <?php
                $realizadores=$con->prepare('select * from realizadores');
                $realizadores->execute();
                $realizador=$realizadores->get_result();
                echo"<br>Realizadores: ";
                while($r=$realizador->fetch_assoc()){
                    echo '<br><br><a href="realizadores_show.php?realizador='.$r['id_realizador'].'">';
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
            echo "<button class='button4'> <a href='atores_index.php'>Atores</a></button><br><br>";
            $a=0;
            if(!empty($_SESSION['login'])){  
                if($_SESSION['login']== "correto"){
                    $a=1;
                }
            }
            if($a==1){ 
                echo"<button class='button4'><a href='realizadores_create.php'>Adicionar Realizador</a></button><br><br>";
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