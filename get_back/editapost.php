<?php include_once("seguranca.php"); 

	$id_post = $_GET['id_post'];
	$text = $_POST['text'];

	if (empty($_FILES['img']['name'])) {
		$sql = "UPDATE postagem SET post = '$text' WHERE id_post = '$id_post'";
		if($conn->query($sql)){
			$msg = "Atualizado!";
	     	echo $msg;
	     	header("Location: meus_posts.php");
		}else{
			$msg = "Erro!";
		    echo $sql;
		    header("Location: meus_posts.php");
		}
	}else{

		$extensao = strtolower(substr($_FILES['img']['name'], -4));
		$novo_nome = md5(time()) . $extensao;
		$diretorio = "img_post/";
		move_uploaded_file($_FILES['img']['tmp_name'], $diretorio.$novo_nome);

		$sql2 = "UPDATE postagem SET post = '$text', img_post = '$novo_nome' WHERE id_post = '$id_post'";

		if($conn->query($sql2)){
			$msg = "Atualizado!";
	     	echo $msg;
	     	header("Location: meus_posts.php");
		}else{
			$msg = "Erro!";
		    echo $sql;
		    header("Location: meus_posts.php");
		}
	}
?>