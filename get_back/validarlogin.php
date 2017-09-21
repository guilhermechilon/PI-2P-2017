<?php
	session_start();
	include("conexao.php");

	$email = $_POST['email'];
	$senha = $_POST['senha'];
    $senha = md5($senha);

	$sql = "SELECT * FROM usuario WHERE email='$email' && senha='$senha' LIMIT 1";
	$result = mysqli_query($conn, $sql);

	$row = $result->fetch_assoc();

    if(empty($row)){

        $_SESSION['loginErro'] = "Usuario não encontrado!";
        header("location: login1.php");

    }elseif (isset($row)) {

        $_SESSION['id_usuario'] = $row['id_usuario'];
        header("location: index.php");

    }else{

        $_SESSION['loginErro'] = "Email ou Senha invalido!";
        header("Location: login1.php");
    }

?>
