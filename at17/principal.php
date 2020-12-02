<?php
$nome = $_POST['txt_nome'];
$idade = $_POST['txt_idade'];

session_name('VariaveisNomeIdade');
session_start();

$_SESSION['NomeAluno'] = $nome;
$_SESSION['IdadeAluno'] = $idade;

echo "Nome: ".$nome."<br>";
echo "Idade: ".$idade."<br>";

echo "<a href='formulario.html'><h5><b>Voltar</b></h5>";
echo "<a href='visitante.php'><h5><b>Visitante</b></h5>";
?>