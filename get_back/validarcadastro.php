<?php

	session_start();
	
	include("conexao.php");

	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$senha = md5($senha);
	$nome = $_POST['nome'];
	$curso = $_POST['curso'];

	$extensao = strtolower(substr($_FILES['img']['name'], -4));
	$novo_nome = md5(time()) . $extensao;
	$diretorio = "img_user/";
	move_uploaded_file($_FILES['img']['tmp_name'], $diretorio.$novo_nome);

	$sqlemail = mysqli_query($conn,"SELECT u.email FROM usuario as u WHERE email = '$email' LIMIT 1");
	$numrows = mysqli_num_rows($sqlemail);

	if ($numrows > 0) {
		$_SESSION['signErro'] = "E-mail já existente!";
	    header("Location: cadastro1.php");
	}else{
		
		$sql = "INSERT INTO usuario(email, senha, nome, curso, foto_perfil) VALUES ('$email','$senha','$nome','$curso','$novo_nome')";
		if ($conn->query($sql)) {
			header("Location: login.php");
		}else{
			$_SESSION['signErro'] = "Falha ao cadastrar!";
	    	header("Location: cadastro1.php");
		}

	}

	
?>