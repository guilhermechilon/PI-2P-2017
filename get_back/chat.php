<?php
	include_once("seguranca.php");
	$id_usuario = $_SESSION['id_usuario'];
	$_SESSION['id_para'] = $_GET['usuario'];
	$id_para = $_SESSION['id_para'];
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include("head.php"); ?> 
  </head>
  <body>
  	<div class="container">
	    <div class="row">
	        <div class="col-md-6 col-md-offset-3">
				<div id="content">
					<div id="lista" style=""></div>
					<div id="down"><hr/></div>
					<form id="form-chat" action="" method="POST" enctype="multipart/form-data">
						<div class="col-lg-12">
							<div class="input-group">
								<input type="text" name="mensagem" id="mensagem" placeholder="Digite sua mensagem" class="form-control" />
								<span class="input-group-btn">
									<input type="submit" value="&rang;&rang;" class="btn btn-success">
								</span>
							</div>
						</div>
					</form>
					<?php
						$mensagem = $_POST['mensagem'];

						date_default_timezone_set('America/Sao_Paulo');
						$data = date('Y-m-d H:i:s');

						if(empty($mensagem)){
						}else{
							if(mysqli_query($conn,"INSERT INTO `mensagens`(`id_de`, `id_para`, `mensagem`, `data_hora`, `visualizado`) VALUES ('$id_usuario', '$id_para', '$mensagem', '$data', '1')")){
								header('Location:chat.php?usuario='.$id_para.'');
							}else{
								echo "<code>Erro ao enviar a mensagem.</code>";	
							}
						}

					?>
					<br><br>
				</div>

			</div>
	    </div>
	</div>
    
    <?php include("script.php"); ?>
    
  </body>
</html>