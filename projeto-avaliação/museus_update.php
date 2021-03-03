<?php
$idMuseu=$_GET['museu'];
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $nome = "";
        $lugar = "";
        $pais = "";
        if(isset($_POST['nome'])){
            $nome = $_POST['nome'];
        }
        else{
            echo '<script>alert("É obrigatório o preenchimento do nome.");</script>';
        }

        if(isset($_POST['lugar'])){
            $lugar = $_POST['lugar'];
        }

        if(isset($_POST['pais'])){
            $pais = $_POST['pais'];
        }

        $con = new mysqli("localhost","root","","museus");
        if($con->connect_errno!=0){
            echo "Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error;
            exit;
        }
        else{
            $sql = "update museus set nome=?,lugar=?,pais=? where id_museu=?";

            $stm=$con->prepare($sql);
            if($stm!=false){
                $stm->bind_param("sssi",$nome,$lugar,$pais,$idMuseu);
                $stm->execute();
                $stm->close();
                echo '<script>alert("Museu alterado com sucesso!!");</script>';
                echo "Aguarde um momento. A reencaminhar página";
                header("refresh:5; url=index.php");
            }
        }
    }
    else{
        echo "<h1> Houve um erro ao processar o seu pedido!<br>Irá ser reencaminhado!</h1>";
        header("refresh:5; url=index.php");
    }