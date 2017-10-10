<?php
    session_start();
	include("conexao.php");

	$email = $_POST['email'];
	$senha = $_POST['senha'];
    $senha = md5($senha);

	$sql = mysqli_query($conn,"SELECT * FROM usuario WHERE email='$email' && senha='$senha' LIMIT 1");

	$row = mysqli_fetch_assoc($sql);

    if(empty($row)){
        $_SESSION['loginErro'] = "Usuário não encontrado!";
        header("Location: login1.php");
    }
    elseif (isset($row)) {
        $_SESSION['id_usuario'] = $row['id_usuario'];
        header("Location: index.php");
    }
    else{
        $_SESSION['loginErro'] = "Email ou Senha inválido!";
        header("Location: login1.php");
    }

?>