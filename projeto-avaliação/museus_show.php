<?php 
    session_start();
    if(!isset($_SESSION['login'])){
        $_SESSION['login']="incorreto";
    }
    if($_SESSION['login']== "correto" && isset($_SESSION['login'])){
        if($_SERVER['REQUEST_METHOD']=="GET"){
            if(!isset($_GET['museu']) || !is_numeric($_GET['museu'])){

                echo '<script>alert("Erro ao abrir museu");</script>';
                echo 'Aguarde um momento.A reencaminhar pagina';
                header("refresh:5; url=index.php");
                exit();
            }
            $idMuseu=$_GET['museu'];
            $con=new mysqli("localhost","root","","museus");

            if($con->connect_error!=0){

                echo 'Ocorreu um erro no acesso a base de dados <br>'.$con->connect_error;
                exit();
            }
            else{
                $sql='select * from museus where id_museu=?';
                $stm=$con->prepare($sql);
                if($stm!=false){
                    $stm->bind_param('i',$idMuseu);
                    $stm->execute();
                    $res=$stm->get_result();
                    $museu=$res->fetch_assoc();
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
        <h1>Detalhes do museu</h1>
        <?php
            if(isset($museu)){
                echo '<br><br>';
                echo "Museu: ";
                echo $museu['nome'];
                echo '<br><br>';
                echo "Lugar: ";
                echo $museu['lugar'];
                echo '<br><br>';
                echo "País: ";
                echo $museu['pais'];
                echo '<br><br>'; 
                echo '<a href="museus_edit.php?museu='.$museu['id_museu']. '">Editar</a><br>';
                echo '<a href="museus_delete.php?museu='.$museu['id_museu']. '">Eliminar</a><br>';
            }
            else{
                echo '<h2>Parece que o museu selecionado não existe</h2>';
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