<?php include_once("seguranca.php"); 

	$nome = isset($_POST['nome']) == true ? $_POST['nome']:"";
	$curso = isset($_POST['curso']) == true ? $_POST['curso']:"";


	$sqledituser = ("UPDATE usuario SET nome = '$nome',curso = '$curso' WHERE id_usuario = $id_usuario");

	if($conn->query($sqledituser)){

			$msg = "Salvo!";
         	echo $msg;
         	header("Location: perfil.php");

	}else{
		$msg = "Erro!";
        echo $msg;
        header("Location: perfil.php");
    }


?>