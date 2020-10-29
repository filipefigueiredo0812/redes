<?php
    $Dados = array(2, 5, 10, 'Maria', 2.5, 'Rui', 8, 'A',3,'B');
echo "Valores do array:";
for($i=0; $i<10; $i++)
{
    echo $Dados[$i]. " ";
}
echo "<br>------------------------------------------------------";
echo '<br> Valores do array: <br>';
for($i=0; $i<10; $i++)
{
    echo $Dados[$i]. "<br>";
}
echo "------------------------------------------------------<br>";
$Dados[]=7;
$Dados[]="Carlos";
$Dados[1]="Pedro";
$Dados[4]=50;
$Dados[5]= "Ruizinho";
$Dados[7]=" ";
echo '<br>';
echo "<br>------------------------------------------------------";
echo "Valores do array:";
for($i=0; $i<12; $i++)
{
    echo $Dados[$i]. " ";
}
echo "<br>";
echo "------------------------------------------------------<br>";
echo $Dados[2]. " ";
echo $Dados[5]. " ";
echo $Dados[9]. " ";
echo "<br>------------------------------------------------------";
?>