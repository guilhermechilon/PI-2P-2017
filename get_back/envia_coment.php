<?php
	include_once("segurança.php");
	$id_usuario = $_SESSION['id_usuario'];
	$comentario = $_POST['comentario'];
	$usuario = $_GET['usuario'];

	
	(mysqli_query($conn,"INSERT INTO `comentario`(`id_usuario`, `id_coment`, 'id_post', `comentario`, 'data_coment') VALUES ('$id_usuario', '$id_coment', '$id_post', '$comentario', '$data_coment')"))
?>