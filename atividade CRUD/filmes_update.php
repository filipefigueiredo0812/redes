<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $titulo = "";
        $sinopse = "";
        $quantidade = 0;
        $idioma = "";
        if(isset($_POST['titulo'])){
            $titulo = $_POST['titulo'];
        }
        else{
            echo '<script>alert("É obrigatório o preenchimento do titulo.");</script>';
        }

        if(isset($_POST['sinopse'])){
            $titulo = $_POST['sinopse'];
        }

        if(isset($_POST['quantidade']) && is_numeric($_POST['quantidade'])){
            $titulo = $_POST['quantidade'];
        }

        if(isset($_POST['idioma'])){
            $titulo = $_POST['idioma'];
        }

        if(isset($_POST['data_lancamento'])){
            $titulo = $_POST['data_lancamento'];
        }

        $con = new mysqli("localhost","root","","filmes");

        if($con->connect_errno!=0){
            echo "Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error;
            exit;
        }
        else{
            $sql = "insert into filmes(titulo,sinopse,idioma,data_lancamento,quantidade) values(?,?,?,?,?);";

            if($stm!=false){
                $stm->bind_param("ssssi",$titulo,$sinopse,$idioma,$data_lancamento,$quantidade);
                $stm->execute();
                $stm->close();
                echo '<script>alert("Filme alterado com sucesso!!");</script>';
                echo "Aguarde um momento. A reencaminhar página";
                header("refresh:5; url=index.php");
            }
            else{

            }
        }
    }
    else{
        echo "<h1> Houve um erro ao processar o seu pedido!<br>Irá ser reencaminhado!</h1>";
        header("refresh:5; url=index.php");
    }