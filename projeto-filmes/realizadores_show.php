<?php 
    session_start();
    if(!isset($_SESSION['login'])){
        $_SESSION['login']="incorreto";
    }
    if($_SESSION['login']== "correto" && isset($_SESSION['login'])){
        if($_SERVER['REQUEST_METHOD']=="GET"){
            if(!isset($_GET['realizador']) || !is_numeric($_GET['realizador'])){
                echo '<script>alert("Erro ao abrir");</script>';
                echo 'Aguarde um momento.A reencaminhar pagina';
                header("refresh:5; url=realizadores_index.php");
                exit();
            }
            $idRealizador=$_GET['realizador'];
            $con=new mysqli("localhost","root","","filmes");

            if($con->connect_error!=0){

                echo 'Ocorreu um erro no acesso a base de dados <br>'.$con->connect_error;
                exit();
            }
            else{
                $sql='select * from realizadores where id_realizador=?';
                $stm=$con->prepare($sql);
                if($stm!=false){
                    $stm->bind_param('i',$idRealizador);
                    $stm->execute();
                    $res=$stm->get_result();
                    $realizador=$res->fetch_assoc();
                    $stm->close();
                }
                else{
                    echo '<br>';
                    echo ($con->error);
                    echo'<br>';
                    echo"Aguarde um momento.A reencaminhar pagina";
                    echo'<br>';
                    header("refresh:5; url=realizadores_index.php");
                }
            }
        }
    ?>
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="utf-8">
        <title>Detalhes</title>
        <body>
        <h1>Detalhes do Realizador</h1>
        <?php
            if(isset($realizador)){
                echo '<br><br>';
                echo "Realizador: ";
                echo $realizador['nome'];
                echo '<br><br>';
                echo "Data Nascimento: ";
                echo $realizador['data_nascimento'];
                echo '<br><br>';
                echo "Nacionalidade: ";
                echo $realizador['nacionalidade'];
                echo '<br><br>';
                echo '<br><br>'; 
                echo '<a href="realizadores_edit.php?realizador='.$realizador['id_realizador']. '">Editar</a><br>';
                echo '<a href="realizadores_delete.php?realizador='.$realizador['id_realizador']. '">Eliminar</a><br>';
            }
            else{
                echo '<h2>Parece que o realizador selecionado não existe</h2>';
            }
        ?>
        </body>
        </html>
        <?php
    }
    else {
        echo  "Precisa estar logado. <br>" ;
        echo  "Irá ser redirecionado para uma página de login" ;
        header("refresh: 5; url = login.php");
    }
?>