<!DOCTYPE html>
<html>
    <head>
        <meta charset="ISO-8859-1">
        <title>Login</title>
        <link rel="stylesheet" type='text/css' href="style.css">
    </head>
    <body>
        <h1>Login</h1>
        <form method="post" action="processa_login.php">
            <label>Nome Utilizador</label><input type="text" name="user_name" required ><br>
            <label>Palavra-Passe</label><input type="text" name="password" required ><br>
            <input type="submit" name="login"><br>
        </form>
        <br>
        <p><button><a href="register.php">Register</a></button><button><a href="index.php">Voltar</a></button>
    </body>
</html>