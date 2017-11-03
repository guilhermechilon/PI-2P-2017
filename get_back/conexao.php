<?php
	$conn = mysqli_connect("localhost","root","","achados_perdidos") or die ("Erro na conexão com o Banco de Dados");
	mysqli_query($conn, 'SET NAMES utf8');

	if(!$conn){
		echo "Erro ao conectar ao banco de dados!";
	}

?>