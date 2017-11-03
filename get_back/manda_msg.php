<?php
	session_start();
	include_once("settings/settings.php");
	$id_usuario = $_SESSION['id_usuario'];
	$mensagem = $_POST['mensagem'];
	$id_para = $_GET['usuario'];
	$id_de = $id_usuario;

	if(empty($mensagem)){
		echo "<code>Digite sua mensagem</code>";
	}else{
		if(mysqli_query($conn,"INSERT INTO `mensagens`(`id_de`, `id_para`, `mensagem`) VALUES ('$id_de', '$id_para', '$mensagem')")){
			header('Location:chat.php?usuario='.$id_para.'');
		}else{
			echo "<code>Erro ao enviar a mensagem.</code>";	
		}
	}

?>