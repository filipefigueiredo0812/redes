<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){

        $titulo="";
        $sinopse="";
        $idioma="";
        $data_lancamento="";
        $quantidade=0;
    
        if(isset($_POST['titulo'])){

            $titulo = $_POST['titulo'];
        }
        else{

            echo '<script>alert("É obrigatório o preenchimento do titulo.");</script>';
        }

        if(isset($_POST['sinopse'])){

            $sinopse = $_POST['sinopse'];
        }

        if(isset($_POST['quantidade']) && is_numeric($_POST['quantidade'])){

            $quantidade = $_POST['quantidade'];
        }

        if(isset($_POST['idioma'])){

            $idioma = $_POST['idioma'];
        }

        if(isset($_POST['data_lancamento'])){

            $data_lancamento = $_POST['data_lancamento'];
        }

        $con = new mysqli("localhost","root","","filmes");

        if($con->connect_errno!=0){

            echo "Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error;
            exit;
        }

        else{

            $sql = 'insert into filmes(titulo,sinopse,quantidade,idioma,data_lancamento) values(?,?,?,?,?)';
            $stm = $con->prepare($sql);
            if($stm!=false){
                $stm->bind_param('ssiss',$titulo,$sinopse,$quantidade,$idioma,$data_lancamento);
                $stm->execute();
                $stm->close();
                
                echo '<script>alert("Livro adicionado com sucesso");</script>';
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
    <title>Adicionar filmes</title>
</head>
<body>
    <h1>Adicionar filmes</h1><br>
    <form action="filmes_create.php" method="post"><br>
    <label>Titulo</label><input type="text" name="titulo" required><br><br>
    <label>Sinopse</label><input type="text" name="sinopse"><br><br>
    <label>Quantidade</label><input type="numeric" name="quantidade"><br><br>
    <label>Idioma</label><input type="text" name="idioma"><br><br>
    <label>Data lançamento</label><input type="date" name="data_lancamento"><br><br>
    <input type="submit" name="enviar"><br><br>
    </form>
</body>
</html>
<?php
    };
?>