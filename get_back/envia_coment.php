<?php

	include_once("seguranca.php");


	$text = $_POST['text'];
	$id_usuario = $_SESSION['id_usuario'];
	$id_coment = $id_usuario;

	date_default_timezone_set('America/Sao_Paulo');
	$data = date('Y-m-d H:i:s');	

	$sql = "INSERT INTO comentario(id_coment, id_usuario, comentario, data_coment) VALUES ('$id_coment', '$id_usuario', '$text','$comentario,'$data')";
	
	$result = mysqli_query($conn,$sql);

	header("Location:index.php");
?>