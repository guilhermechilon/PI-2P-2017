<?php

	session_start();

	//verifica se existe dados na sessao
	if(isset($_SESSION['id_usuario'])) {
	  $id_usuario = $_SESSION['id_usuario'];
	} else {
	  header("Location: login.php");
	}
	include("conexao.php");
	error_reporting(0);

	$text = $_POST['text'];

	$extensao = strtolower(substr($_FILES['img']['name'], -4));
	$novo_nome = md5(time()) . $extensao;
	$diretorio = "img_post/";
	move_uploaded_file($_FILES['img']['tmp_name'], $diretorio.$novo_nome);

	date_default_timezone_set('America/Sao_Paulo');
	$data = date('Y-m-d H:i:s');

	$sql = "INSERT INTO postagem(id_usuario, post, img_post, data_post,) VALUES ('$id_usuario','$text','$novo_nome','$data')";
	$result = mysqli_query($conn,$sql);

	header("Location:index.php")
?>