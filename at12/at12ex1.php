  
<?php
    $nome = "Funções de manipulação de strings no PHPs";
//Converte a string para maiusculas;
    $nome_maiusculo = strtoupper($nome); 
    echo $nome_maiusculo;

    $nome = "Funções de manipulação de strings no PHPs";
//Converte a string para minusculas;
    $nome_minusculo = strtolower($nome); 
    echo $nome_minusculo;

    $nome = "Funções de manipulação de strings no PHPs";
//Retorna um fragmento da string
    $parte = substr($nome,8); 
    echo $parte;

    $nome = "Linha de Código";
//Retorna um fragmento da string da primeira posição até á sexta
    $parte = substr($nome,0,5); 
    echo $parte;

//Repete uma string o número de vezes do argumento inteiro
    $repetido = str_repeat("0",5); 
    echo $repetido;

//Devolve a quantidade de caracteres;
    $qtd_char = strlen("Linha de Código"); 
    echo $qtd_char;

//Substitui os caracteres numa string
    $texto = "Olá, mundo.";
    $novo_texto = str_replace("mundo","leitor",$texto); 
    echo $novo_texto;

//Dados 2 argumentos, devolve a posição do texto de pesquisa no texto a pesquisar.
    $texto = "Bem vindo ao Linha de Código!";
    $pos = strpos($texto, "Código"); 
    echo $pos;
?>