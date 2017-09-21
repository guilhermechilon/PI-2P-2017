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

		<section>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-5 col-md-offset-2">
						<form method="POST" action="publicar.php" enctype="multipart/form-data">
							<div class="form-group">
								<textarea class="form-control" id="exampleTextarea" rows="4" style="resize: none;" required></textarea>
							</div>
							<div class="form-group">
							    <input type="file" class="form-control-file" name="img">
							</div>
							<button type="submit" class="btn btn-primary" style="background-color: #dc0909;border-color: #dc0909;float: right;">Publicar</button>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-md-offset-2">
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
                                            <a href="" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="1">
	                                            <div class="timeline-item-post" style="text-align: center;">
	                                                <img src="img/perfil.jpg" width="350" height="300">
	                                            </div>
	                                        <?php
	                                        	$_SESSION['id'] = 'asdw';
	                                        ?>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
					<div class="col-md-3 col-md-offset-1">
						
					</div>
				</div>
			</div>
		</section>

		<br><br><br>

		<?php include("footer.php"); ?>
		
		<?php include("modal.php"); ?>

		<?php include("script.php"); ?>
		
	</body>

</html>