<?php
$idObra=$_GET['obra'];
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $titulo = "";
        $ano = "";
        if(isset($_POST['titulo'])){
            $titulo = $_POST['titulo'];
        }
        else{
            echo '<script>alert("É obrigatório o preenchimento do titulo.");</script>';
        }
        if(isset($_POST['ano'])){
            $ano = $_POST['ano'];
        }

        $con = new mysqli("localhost","root","","museus");
        if($con->connect_errno!=0){
            echo "Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error;
            exit;
        }
        else{
            $sql = "update obras set titulo=?,ano=? where id_obra=?";

            $stm=$con->prepare($sql);
            if($stm!=false){
                $stm->bind_param("ssi",$titulo,$ano,$idObra);
                $stm->execute();
                $stm->close();
                echo '<script>alert("Obra alterada com sucesso!!");</script>';
                echo "Aguarde um momento. A reencaminhar página";
                header("refresh:5; url=index.php");
            }
        }
    }
    else{
        echo "<h1> Houve um erro ao processar o seu pedido!<br>Irá ser reencaminhado!</h1>";
        header("refresh:5; url=index.php");
    }