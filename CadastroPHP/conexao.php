<?php 
	date_default_timezone_set('America/Sao_Paulo');
	$servidor = "localhost";
	$usuario = "root";
	$senha = "usbw";
	$banco = "meubanco";
	$con = new mysqli($servidor,$usuario,$senha,$banco);
	if(!$con){
		echo "Erro de conexão!".$con->error;
	}
 ?>