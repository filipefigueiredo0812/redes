<?php
if($_SETVER['REQUEST_METHOD']=="GET"){
    if(isset($_GET['filme']) && is_numeric($_GET['filme'])){
        $idFilme = $_GET['filme'];
        $con = new mysqli("localhost","root","","filmes");

        if($con->connect_errno!=0){
            echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        $sql = "Select * from filmes where id_filme=?";
        $stm = $con->prepare($sql);
        if($stm!=false){
            $stm->bind_param("i",$idFilme);
            $stm->execute();
            $res=$stm->get_result();
            $livro = $res->fetch_assoc();
            $stm->close();
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<tile>Editar filme</title>
</head>
<body>
<h1>Editar filmes</h1>
<form action="filmes_update.php" method="post">
<label>Titulo</label><input type="text" name="titulo" required value="<?php echo $livro['titulo'];?>"><br>
<label>Sinopse</label><input type="text" name="sinopse" required value="<?php echo $livro['sinopse'];?>"><br>
<label>Quantidade</label><input type="text" name="quantidade" required value="<?php echo $livro['quantidade'];?>"><br>
<label>Idioma</label><input type="numeric" name="idioma" required value="<?php echo $livro['idioma'];?>"><br>
<label>Data lançamento</label><input type="date" name="data_lancamento" required value="<?php echo $livro['data_lancamento'];?>"><br>
<input type="submit" name="enviar"><br>
</body>
<?php
 }
 else{
     echo ("<h1>Houve um erro ao processar o seu pedido.<br>Dentro de segundos será reencaminhado!</h1>");
     header("refresh:5; url=index.php");
 }