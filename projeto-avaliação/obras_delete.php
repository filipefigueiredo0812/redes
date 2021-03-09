<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="GET"){
    if(isset($_GET['obra']) || is_numeric($_GET['obra'])){
        $idObra = $_GET['obra'];
        $con = new mysqli("localhost","root","","museus");
        if($con->connect_errno!=0){
            echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        else{
        $sql = "delete from obras where id_obra=?";
        $stm = $con->prepare($sql);
        if($stm!=false){
            $stm->bind_param("i",$idObra);
            $stm->execute();
            $stm->close();
            echo ("<script>alert('Obra eliminado com sucesso');</script>");
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
?>