<?php 

	include_once("conexao.php");
	
	$id_coment = $_GET['id_coment'];
    $sql_query = "DELETE FROM comentario WHERE id_coment = $id_coment";
	
	if ($conn->query($sql_query)) {
		header("Location:posts_comentados.php");
	}
	header("Location:posts_comentados.php");

?>