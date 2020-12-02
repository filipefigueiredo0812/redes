<?php
echo "<span style='color:red;'><h3><b>************************************Pagina Visitante*****************************************</b></h3></span><br>";

session_name('VariaveisNomeIdade');
session_start();

echo "Nome: ".$_SESSION['NomeAluno']."<br>";
echo "Idade: ".$_SESSION['IdadeAluno']."<br>";

$nome = $_SESSION['NomeAluno'];
$idade = $_SESSION['IdadeAluno'];
echo "<br><br>";
echo "Nome: ".$nome."<br>";
echo "Idade: ".$idade."<br>";

echo "<a href='formulario.html'><h5><b>Voltar</b></h5>";
echo "<a href='principal.php'><h5><b>Principal</b></h5>";
echo "<a href='PrincipalCom_Isset_e_Empty.php'><h5><b>Principal com isset e empty</b></h5>";
?>