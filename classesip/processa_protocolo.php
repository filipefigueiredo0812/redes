<?php 
    include "css.php";
	$protocolo=$_GET['protocolo'];
	if($protocolo=="dns"){
		echo"<h5>É o protocolo utilizado para associar a cada endereço IP um nome, pois desta forma é mais fácilde ser memorizado pelos utilizadores. Por exemplo, www.portoeditora.pt, poderá,corresponder ao endereço IP 192.16831.32.</h5>";
	}
	elseif($protocolo=="ftp"){
		echo"<h5>É o protocolo utilizado para a transferência de ficheiros. Serve para fazermos o download ou upload de ficheiros de ou para servidores FTP, aquele cujo endereço começa por ftp://.</h5>";
	}
	elseif($protocolo=="http"){
		echo"<h5>É o protocolo utilizado para controlar a comunicação entre o servidor de Internet e o browser, ou seja, serve de suporte à World Wide Web. É o que nos permite escrever na Barra de Endereços do nosso browser um endereço URL [Uniform Resource Locator] e rapidamente receber a página Web correspondente.</h5>";
	}
	else{
		echo"<h5>É o protocolo responsável por estabelecer a ligação entre os computadores emissor e recetor para que a informação não se perca na rede.</h5>";
	}
	echo"<a href='index.php'>Voltar</a>";
?>