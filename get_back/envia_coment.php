<?php

	include_once("seguranca.php");

	$coment = $_POST['coment'];
	$id_post = $_GET['id_post'];

	date_default_timezone_set('America/Sao_Paulo');
	$data = date('Y-m-d H:i:s');

	$sql = "INSERT INTO `comentario`(`id_post`, `id_usuario`, `comentario`, `data_coment`) VALUES ('$id_post','$id_usuario','$coment','$data')";
	$result = mysqli_query($conn,$sql);

	header("Location:index.php");
?>