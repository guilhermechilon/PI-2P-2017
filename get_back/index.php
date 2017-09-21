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
					<div class="col-md-2"></div>
					<div class="col-md-7">
						<div class="profile-timeline">
                            <ul class="list-unstyled">
                                <li class="timeline-item">
                                    <div class="panel panel-dark">
                                        <div class="panel-body">
                                            <div class="timeline-item-header">
                                                <a href="">
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
					<div class="col-md-3"></div>
				</div>
			</div>
		</section>

		<br><br><br>

		<?php include("footer.php"); ?>
		
		<?php include("modal.php"); ?>

		<script src="jquery/jquery-2.1.4.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
	</body>

</html>