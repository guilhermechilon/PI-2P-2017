<?php session_start();

	//verifica se existe dados na sessao
	if(isset($_SESSION['id_usuario'])) {
	  $id_usuario = $_SESSION['id_usuario'];
	} else {
	  header("Location: login.php");
	}
	include("conexao.php");
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include("head.php"); ?>
	</head>
	<body>

		<?php include("header.php"); ?>
		
		<section id="gotop">
			<br><br><br>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-9 col-sm-10" style="background-image: url(img/wall.jpg);background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;height: 100%;">
						<br><br>
						<div class="col-md-8 col-md-offset-3 col-sm-8 col-sm-offset-3">
							<form method="POST" action="publicar.php" enctype="multipart/form-data">
								<div class="form-group">
									<textarea class="form-control" name="text" rows="4" style="resize: none;border-color: #dc0909;" placeholder="Digite aqui . . ." required></textarea>
								</div>
								<label class="btn btn-default btn-file">
								    Carregar Imagem<input type="file" class="form-control-file" name="img" style="display: none;">
								</label><br>
								<button type="submit" class="btn btn-primary" style="background-color: #dc0909;border-color: #dc0909;float: right;">Publicar</button>
							</form>
						</div>
						<div class="col-md-1 col-sm-1"></div>

						<?php 
							$sql = mysqli_query($conn,"SELECT DATE_FORMAT(p.data_post, '%d/%m/%Y %H:%i:%s') as data_post,p.id_post,p.id_usuario,p.post,p.img_post,u.nome,u.foto_perfil,u.nome,u.foto_perfil FROM postagem as p INNER JOIN usuario as u ON u.id_usuario = p.id_usuario ORDER BY p.data_post DESC LIMIT 10");
						?>
						<br><br><br><br><br><br><br><br><br><br>
						<div class="col-md-8 col-md-offset-3 col-sm-12 col-sm-offset-2">
							<div class="profile-timeline">
	                            <ul class="list-unstyled">
	                            	<?php while ($row = mysqli_fetch_object($sql)) { ?>
	                            		
		                                <li class="timeline-item">
		                                    <div class="panel panel-dark">
		                                        <div class="panel-body">
		                                            <div class="timeline-item-header">
		                                                <a href="visit_perfil.php?id=<?php echo $row->id_usuario; ?>" style="text-decoration: none;color: black;">
		                                                	<img src="img_user/<?php echo $row->foto_perfil; ?>" alt="" style="border-radius: 25px;width: 50px;height: 50px;">
		                                                	&nbsp;&nbsp;&nbsp;<strong><?php echo $row->nome; ?></strong><br>
		                                                </a>
		                                                <small><?php echo $row->data_post; ?></small>
		                                            </div>
		                                            <br>
		                                            <p><?php echo $row->post; ?></p>
		                                            <br>
		                                            <div class="timeline-item-post" style="margin: 0;text-align: center;">
	                                            		<a href="" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="1" onclick="deletaDado(<?php echo $row->id_post; ?>)">
	                                                		<img src="img_post/<?php echo $row->img_post; ?>" style="width: 428.75px;height: 428.75px;">
	                                            		</a>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </li>

	                               	<?php } ?>

	                            </ul>
	                        </div>
                    	</div>
					</div>

					<div class="col-md-3 col-sm-2" style="position: fixed;float: right;margin-left: 75%;height: 80%;z-index: 998;">
						<br><br>
						<a href="#" style="text-decoration: none;color: black;">
                        	<img src="assets/images/avatar3.png" alt="" style="border-radius: 25px;">
                        	<strong><?php echo "Meu nome"; ?></strong>
                        </a>
                        <br><br>
                        <?php echo "Sistemas de Informação"; ?>
                        <br><br>
                        <h4>Últimas Atividades</h4>
                        <ul style="text-decoration: none;list-style-type: none;">
                        	<li><a href="#">Post do <?php echo "Gil das Pamonhas" ?></a></li><br>
                        	<li><a href="#">Post do <?php echo "Gil das Pamonhas" ?></a></li><br>
                        	<li><a href="#">Post do <?php echo "Gil das Pamonhas" ?></a></li><br>
                        	<li><a href="#">Post do <?php echo "Gil das Pamonhas" ?></a></li><br>
                        	<li><a href="#">Post do <?php echo "Gil das Pamonhas" ?></a></li><br>
                        </ul>
					</div>
				</div>
			</div>
		</section>
		<a href="#gotop" style="margin-right:25px;width: 50px;float: right;z-index: 9999;"><i class="glyphicon glyphicon-chevron-up"></i></a>

		<?php include("footer.php"); ?>

		<?php include("modal.php"); ?>

		<?php include("script.php"); ?>
		
	</body>

</html>