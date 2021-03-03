<?php
if(!isset($_SESSION['login'])){
    $_SESSION['login']="incorreto";
}
if($_SESSION['login']=="correto" && isset($_SESSION['login'])){

    if($_SERVER['REQUEST_METHOD']=="GET"){

    if(isset($_GET['museu']) && is_numeric($_GET['museu'])){
        $idMuseu = $_GET['museu'];
        $con = new mysqli("localhost","root","","museus");

        if($con->connect_errno!=0){
            echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        $sql = "Select * from museus where id_museu=?";
        $stm = $con->prepare($sql);

        if($stm!=false){
            $stm->bind_param("i",$idMuseu);
            $stm->execute();
            $res=$stm->get_result();
            $livro = $res->fetch_assoc();
            $stm->close();
        }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <tile>Editar Museu</title>
    <link rel="stylesheet" type='text/css' href="style.css">
</head>
<body>
    <h1>Editar museus</h1>
    <form action="museus_update.php?museu=<?php echo $museu['id_museu']; ?>" method="post">
        <label>Nome</label><input type="text" name="nome" required value="<?php echo $museu['nome'];?>"><br>
        <label>Lugar</label><input type="text" name="lugar" required value="<?php echo $museu['lugar'];?>"><br>
        <label>País</label><input type="text" name="pais" required value="<?php echo $museu['pais'];?>"><br>
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
}
else{
    echo 'Para entrar nesta página necessita de efetuar <a href="login.php">Login</a>';
    header('refresh:2;url=login.php');
}