<?php
    session_start();
    if(!isset($_SESSION['login'])){
        $_SESSION['login']="incorreto";
    }
    if($_SESSION['login']=="correto" && isset($_SESSION['login'])){
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $nome="";
            if(isset($_POST['nome'])){
                $titulo=$_POST['nome'];
            }
            else{
                echo '<script>alert("É obrigatório o preenchimento do nome.");</script>';
            }
            
            $con=new mysqli("localhost","root","","museus");
            if($con->connect_errno!=0){
                echo "Ocorreu um erro no acesso à base de dados. <br>" .$con->connect_error;
                exit;
            }
            else{
                if($con->connect_errno!=0){
                    echo "Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error;
                    exit;
                }
        
                else{
                    $sql = 'insert into museus(nome) values(?)';
                    $stm = $con->prepare($sql);
                    if($stm!=false){
                        $stm->bind_param('s',$nome);
                        $stm->execute();
                        $stm->close();
                        echo '<script>alert("Museu adicionado com sucesso");</script>';
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
            }
        else{
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="ISO-8859-1">
    <title>Adicionar Museu</title>
    <link rel="stylesheet" type='text/css' href="style.css">
    </head>
    <body>
    <h1>Adicionar Museu</h1>
    <form action="museus_create.php" method="post">
    <label>Nome</label><input type="text" name="nome" required><br>
    <label>Lugar</label><input type="text" name="lugar"><br>
    <label>País</label><input type="text" name="pais"><br>
    <input type="submit" name="enviar"><br>
    </form>
    </body>
    </html>
    <?php
        };
    }
    else{
        echo 'Para entrar nesta página necessita de efetuar <a href="login.php">Login</a>';
        header('refresh:2;url=login.php');
    }