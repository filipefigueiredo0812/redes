<?php
$login="aluno";
$password="123";
    
if($login=="aluno" && $password=="123")
{
    header("Location: main.php");
}
else
{
    header("Location: erro.php");
}
?>