<?php 
    if($_SERVER['REQUEST_METHOD']=="GET"){
        if(!isset($_GET['filme']) || !is_numeric($_GET['filme'])){

            echo '<script>alert("Erro ao abirir filme");</script>';
            echo 'Aguarde um momento.A reencaminhar pagina';
            header("refresh:5; url=index.php");
            exit();
        }
        $idFilme=$_GET['filme'];
        $con=new mysqli("localhost","root","","filmes");

        if($con->connect_error!=0){

            echo 'Ocorreu um erro no acesso a base de dados <br>'.$con->connect_error;
            exit();
        }
        else{
            $sql='select * from filmes where id_filme=?';
            $stm=$con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('i',$idFilme);
                $stm->execute();
                $res=$stm->get_result();
                $filme=$res->fetch_assoc();
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
    <body>
    <h1>Detalhes do filme</h1>

    <?php
        if(isset($filme)){
            echo '<br><br>';
            echo "Filme: ";
            echo $filme['titulo'];
            echo '<br><br>';
            echo "Sinopse: ";
            echo $filme['sinopse'];
            echo '<br><br>';
            echo "Quantidade: ";
            echo $filme['quantidade'];
            echo '<br><br>';
            echo "Idioma: ";
            echo $filme['idioma'];
            echo '<br><br>';
            echo "Data Lançamento: ";
            echo $filme['data_lancamento'];
            echo '<br><br>'; 
            echo '<a href="filmes_edit.php?filme='.$filme['id_filme']. '">Editar</a>';
        }
        else{
            echo '<h2>Parece que o filme selecionado nao exite</h2>';
        }
       
    ?>
    </body>
    </html>