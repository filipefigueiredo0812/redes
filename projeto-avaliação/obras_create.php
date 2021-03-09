<?php
session_start();
if(!isset($_SESSION['login'])){
    $_SESSION['login']="incorreto";
}
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $id_museu="";
        $titulo="";
        $ano="";
        if(isset($_GET['museu']) && is_numeric($_GET['museu'])){
            $id_museu=$_GET['museu'];
        }
        if(isset($_POST['titulo'])){

            $titulo = $_POST['titulo'];
        }
        else{
            echo '<script>alert("É obrigatório o preenchimento do titulo.");</script>';
        }
        if(isset($_POST['ano']) ){
            $ano=$_POST['ano'];
        }
        $con = new mysqli("localhost","root","","museus");
        if($con->connect_errno!=0){
            echo "Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error;
            exit;
        }
        else{
            $sql = 'insert into obras(id_museu,titulo,ano) values(?,?,?)';
            $stm = $con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('iss',$id_museu,$titulo,$ano);
                $stm->execute();
                $stm->close();
                echo '<script>alert("Obra adicionado com sucesso");</script>';
                echo 'Aguarde um momento. A reencaminhar página';
                header("refresh:5; url=index.php");
            }
            else{
                echo($con->error);
                echo "Aguarde um momento. A reencaminhar página";
                header("refresh:5;url=index.php");
            }
        }
    }
    else{
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <link rel="stylesheet" type='text/css' href="style.css">
</head>
<body>
    <h1>Adicionar Obra</h1><br>

    <?php echo ' <form action="obras_create.php?museu='.$_GET['museu'].'" method="post"> <br>'; ?>
  
       <label>Titulo</label><input type="text" name="titulo" required><br><br>
    <label>Ano</label><input type="date" name="ano"><br><br>
    <input type="submit" name="enviar"><br><br>
    </form>
</body>
</html>
<?php
    }
