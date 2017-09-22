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
					<div class="col-md-7 col-md-offset-2 col-sm-7 col-sm-offset-1">
						<br><br>
						<div class="col-md-10 col-sm-12">
							<form method="POST" action="publicar.php" enctype="multipart/form-data">
								<div class="form-group">
									<textarea class="form-control" id="exampleTextarea" rows="4" style="resize: none;border-color: #dc0909;"  placeholder="Digite aqui . . ." required></textarea>
								</div>
								<label class="btn btn-default btn-file">
								    Carregar Imagem<input type="file" class="form-control-file" name="img" style="display: none;">
								</label><br>
								<button type="submit" class="btn btn-primary" style="background-color: #dc0909;border-color: #dc0909;float: right;">Publicar</button>
							</form>
						</div>
						<div class="col-md-2"></div>
						<div class="col-md-12 col-sm-12">
							<div class="profile-timeline">
	                            <ul class="list-unstyled">
	                                <li class="timeline-item">
	                                    <div class="panel panel-dark">
	                                        <div class="panel-body">
	                                            <div class="timeline-item-header">
	                                                <a href="#" style="text-decoration: none;color: black;">
	                                                	<img src="assets/images/avatar3.png" alt="" style="border-radius: 25px;">
	                                                	<strong><?php echo "Christopher Carlton"; ?></strong><br>
	                                                </a>
	                                                <small>5 hours ago</small>
	                                            </div>
	                                            <br>
	                                            <div class="timeline-item-post" style="margin: 0;text-align: center;">
	                                            	<a href="" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="1">
	                                                	<img src="img/perfil.jpg" style="width: 428.75px;height: 428.75px;">
	                                                	<?php
				                                        	$_SESSION['id'] = 'asdw';
				                                        ?>
	                                            	</a>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </li>
	                                <li class="timeline-item">
	                                    <div class="panel panel-dark">
	                                        <div class="panel-body">
	                                            <div class="timeline-item-header">
	                                                <a href="#" style="text-decoration: none;color: black;">
	                                                	<img src="assets/images/avatar3.png" alt="" style="border-radius: 25px;">
	                                                	<strong><?php echo "Christopher Carlton"; ?></strong><br>
	                                                </a>
	                                                <small>5 hours ago</small>
	                                            </div>
	                                            <br>
	                                            <div class="timeline-item-post" style="margin: 0;text-align: center;">
	                                            	<a href="" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="1">
	                                                	<img src="img/perfil.jpg" style="width: 428.75px;height: 428.75px;">
	                                                	<?php
				                                        	$_SESSION['id'] = 'asdw';
				                                        ?>
	                                            	</a>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </li>
	                            </ul>
	                        </div>
                    	</div>
					</div>

					<div class="col-md-3 col-sm-2" style="position: fixed;float: right;margin-left: 75%;height: 100%;z-index: 998;">
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

		<br><br><br>

		<a href="#gotop" style="margin-left:25px;margin-bottom:5px;"><i class="fa fa-chevron-up"></i></a>

		<?php include("footer.php"); ?>
		
		<?php include("modal.php"); ?>

		<?php include("script.php"); ?>
		
	</body>

</html>
