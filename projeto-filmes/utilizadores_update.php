<?php
    $idUser=$_GET['utilizadores'];
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $utilizador = "";
        $nome="";
        $email="";
        if(isset($_POST['user_name'])){
            $utilizador = $_POST['user_name'];
        }
        else{
            echo '<script>alert("É obrigatório o preenchimento do titulo.");</script>';
        }
        if(isset($_POST['email'])){
            $email = $_POST['email'];
        }
        else{
            echo '<script>alert("É obrigatório o preenchimento do email.");</script>';
        }
        if(isset($_POST['nome'])){
            $nome = $_POST['nome'];
        }
        else{
            echo '<script>alert("É obrigatório o preenchimento do email.");</script>';
        }
        $con = new mysqli("localhost","root","","filmes");
        if($con->connect_errno!=0){
            echo "Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error;
            exit;
        }
        else{
            $sql = "update utilizadores set user_name=?,email=?,nome=? where id=?";
            
            $stm=$con->prepare($sql);
            if($stm!=false){
                $stm->bind_param("sssi",$utilizador,$email,$nome,$idUser);
                $stm->execute();
                $stm->close();
                echo '<script>alert("Utilizador alterado com sucesso!!");</script>';
                echo "Aguarde um momento. A reencaminhar página";
                header("refresh:5; url=index.php");
            }
        }
    }
    else{
        echo "<h1> Houve um erro ao processar o seu pedido!<br>Irá ser reencaminhado!</h1>";
        header("refresh:5; url=index.php");
    }