<?php
	session_start();
	include_once("segurança.php");
	$id_usuario = $_SESSION['comentario'];
    $id_usuario = $_GET['id_usuario'];
    $id_

	mysqli_query($conn,"INSERT INTO `comentario`(`id_coment`, `id_usuario`, `id_post`, 'comentario', 'data_coment') VALUES ('$id_coment', '$id_usuario', '$id_post', '$comentario', '$data_coment')")){

?>