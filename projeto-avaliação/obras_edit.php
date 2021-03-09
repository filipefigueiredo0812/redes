<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="GET"){
    if(isset($_GET['obra']) && is_numeric($_GET['obra'])){
        $idObra = $_GET['obra'];
        $con = new mysqli("localhost","root","","museus");
        if($con->connect_errno!=0){
            echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        $sql = "Select * from obras where id_obra=?";
        $stm = $con->prepare($sql);
        if($stm!=false){
            $stm->bind_param("i",$idObra);
            $stm->execute();
            $res=$stm->get_result();
            $obra = $res->fetch_assoc();
            $stm->close();
        }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <link rel="stylesheet" type='text/css' href="style.css">
</head>
<body>
    <h1>Editar Obra</h1>
    <form action="obras_update.php?obra=<?php echo $obra['id_obra']; ?>" method="post">
        <label>Titulo</label><input type="text" name="titulo" required value="<?php echo $obra['titulo'];?>"><br>
        <label>Ano</label><input type="date" name="ano" required value="<?php echo $obra['ano'];?>"><br>
        
        <input type="submit" name="enviar"><br>
    </form>
</body>
<?php
 }
 else{
     echo ("<h1>Houve um erro ao processar o seu pedido.<br>Dentro de segundos será reencaminhado!</h1>");
     header("refresh:5; url=index.php");
 }
}
?>