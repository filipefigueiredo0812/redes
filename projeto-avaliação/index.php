<?php 
    session_start();
    $con=new mysqli("localhost","root","","museus");
    if($con->connect_error!=0){
        echo"Ocorreu um erro ".$con->connect_error;
        exit;
    }else{
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="ISO-8859-1">
        <title>Museus</title>
        <link rel="stylesheet" type='text/css' href="style.css">
        </head>
        <body>
        <h1> Lista de Museus</h1>
            <?php
                $stm=$con->prepare('select * from museus');
                $stm->execute();
                $res=$stm->get_result();
                echo"<br>Museus: ";
                while($resultado=$res->fetch_assoc()){
                    echo '<br><a href="museus_show.php?museu='.$resultado['id_museu'].'">';
                    echo $resultado['nome'];
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
                        echo '<br><button class="button4"><a href="utilizadores_edit.php?utilizadores='.$resultado['id'].'">Editar Utilizador</a></button><br>';
                    }
            ?>
        <br>
        <?php
            echo "<button class='button4'> <a href='obras_index.php'>Obras</a></button><br><br>";
            
            $a=0;
            if(!empty($_SESSION['login'])){  
                if($_SESSION['login']== "correto"){
                    $a=1;
                }
            }
            if($a==1){ 
                echo"<button class='button4'> <a href='museus_create.php'>Adicionar Museu</a></button><br><br>";
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