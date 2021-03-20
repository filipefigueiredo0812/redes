<?php include "css.php" ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Classes IP</title>
    </head>
    <body>
        <h2>Classes IP</h2>
        <h4>Digite o Endereço IP</h4>
        <form action="processa_ip.php">
            <input type="text" name="a">
            <input type="text" name="b">
            <input type="text" name="c">
            <input type="text" name="d">
            <input type="submit" value="Confirmar">
        </form>
        </h5>
        <br><br>
	    <h3>Protocolos</h3>
	    <h4>Selecione o protocolo</h4>
	    <form action="processa_protocolo.php">
  		    <select name="protocolo">
		        <option value="dns">DNS</option>
		        <option value="ftp">FTP</option>
		        <option value="http">HTTP</option>
		        <option value="ip">IP</option>
  		    </select>
  		    <br><br>
  		    <input type="submit" value="Confirmar">
	    </form>
    </body>
</html>