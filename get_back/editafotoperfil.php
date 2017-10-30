<?php session_start();
	//verifica se existe dados na sessao
if(isset($_SESSION['id_usuario'])) {
  $id_usuario = $_SESSION['id_usuario'];
} else {
  exit('Você não tem permissão para acessar essa página!');
}

    include("conexao.php");

	$extensao = strtolower(substr($_FILES['imagem']['name'], -4));
	$novo_nome = md5(time()) . $extensao;
	$diretorio = "img_user/";
	move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);

	$sqleditfoto = ("UPDATE usuario SET foto_perfil = '$novo_nome' WHERE id_usuario = $id_usuario");

	if($conn->query($sqleditfoto)){
		$msg = "Atualizado!";
     	echo $msg;
     	header("Location: perfil.php");
	}else{
		$msg = "Erro!";
	    echo $msg;
	    header("Location: perfil.php");
	}
?>
