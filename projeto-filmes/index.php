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
                $atores=$con->prepare('select * from atores');
                $atores->execute();
                $ator=$atores->get_result();
                $stm=$con->prepare('select * from filmes');
                $stm->execute();
                $res=$stm->get_result();
                echo"<br>Filmes: ";
                while($resultado=$res->fetch_assoc()){
                    echo '<br><a href="filmes_show.php?filme='.$resultado['id_filme'].'">';
                    echo $resultado['titulo'];
                    echo'</a>';
                    
                }
                echo"<br>Atores: ";
                while($r=$ator->fetch_assoc()){
                    echo '<br><br><a href="atores_show.php?ator='.$r['id_ator'].'">';
                    echo $r['nome'];
                    echo'</a>';
                    echo '<br>';
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
                        echo '<br><a href="editar_utilizadores.php?utilizadores='.$resultado['id'].'">Editar Utilizador</a><br>';
                    }
            ?>
        <br>
        <?php
            $a=0;
            if(!empty($_SESSION['login'])){  
                if($_SESSION['login']== "correto"){
                    $a=1;
                }
            }
            if($a==1){ 
                echo"<button> <a href='filmes_create.php'>Adicionar Livro</a></button>"; 
                echo"<button> <a href='atores_create.php'>Adicionar Ator</a></button>";
                echo"<p><a href='processa_logout.php'>Logout</a>------<a href='utilizadores.php'>Lista Utilizadores</a>";
            }
            else{
                echo" <p><a href='login.php'>Login</a>-----<a href='register.php'>Register</a></p>";
            }
        ?>
        </body>
        </html>
        <?php 
        }
?>