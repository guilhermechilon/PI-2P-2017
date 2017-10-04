<!DOCTYPE html>
<html>
	<head>
		<title>Achados e Perdidos</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="icon" href="#">
	</head>
	<body>
		<?php include("header.php"); ?>

		<section>	
			<div >
			</div>



		</section>

<!-- conectar com o DB e verificar a existencia de post, caso esteja vazio, exibir a mensagem

chama as informacoes que vc que que sera o post 
exibe as informaçoes do bd
	se nao tiver nenhum linha, é para aparecer "vc nao fez nenhum post"

	Tags<include> chamar a conecao db
		<mysql query > chamar os dados do db
		<msqli fath objectv> while> separar linha por linha
		<mysqli_ run rows> quantidade de linha 
		
		-->

		<?php include("footer.php"); ?>
		
		<?php include("modal.php"); ?>

		<?php include("script.php"); ?>
	</body>
</html>