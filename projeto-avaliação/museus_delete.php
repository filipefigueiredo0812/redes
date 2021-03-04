<?php
session_start();
if(!isset($_SESSION['login'])){
    $_SESSION['login']="incorreto";
}
if($_SESSION['login']=="correto" && isset($_SESSION['login'])){
    if($_SERVER['REQUEST_METHOD']=="GET"){
        if(isset($_GET['museu']) || is_numeric($_GET['museu'])){
            $idMuseu = $_GET['museu'];
            $con = new mysqli("localhost","root","","museus");
            if($con->connect_errno!=0){
                echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
                exit();
            }
            else{
            $sql = "delete from museus where id_museu=?";
            $stm = $con->prepare($sql);
            if($stm!=false){
                $stm->bind_param("i",$idMuseu);
                $stm->execute();
                $stm->close();
                echo ("<script>alert('Museu eliminado com sucesso');</script>");
                echo 'Aguarde um momento. A reencaminar página';
                header("refresh:5; url=index.php");
            }
            else{
                echo '<br>';
                echo $con->error;
                echo '<br>';
                echo "Aguarde um momento. A reencaminhar página";
                header("refresh:5; url=index.php");
            }  
        }
    }
    else{
        echo ("<h1>Houve um erro ao processar o seu pedido.<br>Dentro de segundos será reencaminhado!</h1>");
        header("refresh:5; url=index.php");
        }
    }
    else{
        echo ("<h1>Houve um erro ao processar o seu pedido.<br>Dentro de segundos será reencaminhado!</h1>");
        header("refresh:5; url=index.php");
        }

    }
    else{
        echo 'Para entrar nesta página necessita de efetuar <a href="login.php">Login</a>';
        header('refresh:2;url=login.php');
}   