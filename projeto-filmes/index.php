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
                echo"<br>Filmes: ";
                while($resultado=$res->fetch_assoc()){
                    echo '<br><a href="filmes_show.php?filme='.$resultado['id_filme'].'">';
                    echo $resultado['titulo'];
                    echo'</a>';
                    
                }
                
                $stm->close();
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
            echo "<button> <a href='atores_index.php'>Atores</a></button><br><br>";
            echo "<button> <a href='realizadores_index.php'>Realizadores</a></button><br><br>";
            $a=0;
            if(!empty($_SESSION['login'])){  
                if($_SESSION['login']== "correto"){
                    $a=1;
                }
            }
            if($a==1){ 
                echo"<button> <a href='filmes_create.php'>Adicionar Livro</a></button><br><br>";
                echo"<button><a href='processa_logout.php'>Logout</a></button>    <button><a href='utilizadores.php'>Lista Utilizadores</a></button>";
            }
            else{
                echo"<button><a href='login.php'>Login</a></button>    <button><a href='register.php'>Register</a></button>";
            }
        ?>
        </body>
        </html>
        <?php 
        }
?>