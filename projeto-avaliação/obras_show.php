<?php 
    session_start();
    if(!isset($_SESSION['login'])){
        $_SESSION['login']="incorreto";
    }
    if($_SESSION['login']== "correto" && isset($_SESSION['login'])){
        if($_SERVER['REQUEST_METHOD']=="GET"){
            if(!isset($_GET['obra']) || !is_numeric($_GET['obra'])){
                echo '<script>alert("Erro ao abrir");</script>';
                echo 'Aguarde um momento.A reencaminhar pagina';
                header("refresh:5; url=index.php");
                exit();
            }
            $idObra=$_GET['obra'];
            $con=new mysqli("localhost","root","","museus");

            if($con->connect_error!=0){

                echo 'Ocorreu um erro no acesso a base de dados <br>'.$con->connect_error;
                exit();
            }
            else{
                $sql='select * from obras where id_obra=?';
                $stm=$con->prepare($sql);
                if($stm!=false){
                    $stm->bind_param('i',$idObra);
                    $stm->execute();
                    $res=$stm->get_result();
                    $obra=$res->fetch_assoc();
                    $stm->close();
                }
                else{
                    echo '<br>';
                    echo ($con->error);
                    echo'<br>';
                    echo"Aguarde um momento.A reencaminhar pagina";
                    echo'<br>';
                    header("refresh:5; url=index.php");
                }
            }
        }
    ?>
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="utf-8">
        <title>Detalhes</title>
        <link rel="stylesheet" type='text/css' href="style.css">
        <body>
        <h1 style="text-align: center">Detalhes do Obra</h1>
        <p style='text-align:center; font-size: 20px'>
        <?php
            if(isset($obra)){
                echo '<br><br>';
                echo "Obra: ";
                echo $obra['titulo'];
                echo '<br><br>';
                echo "Ano: ";
                echo $obra['ano'];
                echo '<br><br>';
                echo '<br><br>'; 
                echo '<a href="obras_edit.php?obra='.$obra['id_obra']. '">Editar</a><br>';
                echo '<a href="obras_delete.php?obra='.$obra['id_obra']. '">Eliminar</a><br>';
            }
            else{
                echo '<h2>Parece que a obra selecionado não existe</h2>';
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