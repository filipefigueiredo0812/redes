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
                $sql2='select titulo from obras where id_museu=?';
                $stm2=$con->prepare($sql2);
                if($stm2!=false){
                    $stm2->bind_param('i',$idMuseu);
                    $stm2->execute();
                    $res2=$stm2->get_result();
                    $obra=$res2->fetch_assoc();
                    $stm2->close();
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
        <h1 style="text-align:center">Detalhes do museu</h1>
        <p style='text-align:center; font-size: 20px'>
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


                $stm=$con->prepare('select * from obras where id_museu=?');
                $stm->bind_param('i',$idMuseu);
                $stm->execute();
                $res=$stm->get_result();
                echo"<br>Obras: ";
                while($resultado=$res->fetch_assoc()){
                    echo '<br><a href="obras_show.php?obra='.$resultado['id_obra'].'">';
                    echo $resultado['titulo'];
                    echo'</a>';
                    
                }
                $stm->close();


                echo '<br><br>';
                echo '<br><br>';
                echo '<a href="museus_edit.php?museu='.$museu['id_museu']. '">Editar</a><br>';
                echo '<a href="museus_delete.php?museu='.$museu['id_museu']. '">Eliminar</a><br>';
                echo '<br>';
                echo '<a href="obras_create.php?museu='.$museu['id_museu']. '">Adicionar Obra</a><br>';
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