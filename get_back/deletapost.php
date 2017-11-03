<?php 

	include_once("conexao.php");
	
	$id_post = $_GET['id_post'];
    $sql_query = "DELETE FROM postagem WHERE id_post = $id_post";
	
	if ($conn->query($sql_query)) {
		$sql_query2 = "DELETE FROM comentario WHERE id_post = $id_post";
		if ($conn->query($sql_query2)) {
			header("Location:meus_posts.php");
		}
	}
	header("Location:meus_posts.php");

?>