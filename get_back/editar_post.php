<?php include_once("seguranca.php"); 
	$id_post = $_GET['id_post'];
	$sql = mysqli_query($conn,"SELECT DATE_FORMAT(p.data_post, '%d/%m/%Y %H:%i:%s') as data_post,p.id_post,p.id_usuario,p.post,p.img_post,u.nome,u.foto_perfil,u.foto_perfil FROM postagem as p INNER JOIN usuario as u ON u.id_usuario = p.id_usuario WHERE p.id_post = $id_post");
	$row = mysqli_fetch_object($sql);
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
					<div class="col-md-9 col-sm-9" style="background-image: url(img/wall.jpg);background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;height: 100%;">
						<br><br>
						<div class="col-md-8 col-md-offset-3 col-sm-8 col-sm-offset-3">
							<form method="POST" action="editapost.php?id_post=<?php echo $id_post; ?>" enctype="multipart/form-data">
								<div class="form-group">
									<textarea class="form-control" name="text" rows="4" style="resize: none;border-color: #dc0909;" required><?php echo $row->post; ?></textarea>
								</div>
								<div class="form-group">
									<label class="btn btn-default btn-file">
									    Carregar Imagem<input type="file" class="form-control-file" name="img" style="display: none;">
									</label>
								</div>
								<button type="submit" class="btn btn-primary" style="background-color: #dc0909;border-color: #dc0909;float: right;">Publicar</button>
							</form><br><br>
						</div>
						<div class="col-md-1 col-sm-1"></div>
						<div class="col-md-8 col-md-offset-3 col-sm-10 col-sm-offset-2">
							<div class="profile-timeline"><br><br>
	                            <ul class="list-unstyled">	                            		
	                                <li class="timeline-item">
	                                    <div class="panel panel-dark" style="border-radius: 20px;">
	                                        <div class="panel-body">
	                                            <div class="timeline-item-header">
	                                                <a href="visit_perfil.php?id=<?php echo $row->id_usuario; ?>" style="text-decoration: none;color: black;">
	                                                	<img src="img_user/<?php echo $row->foto_perfil; ?>" alt="" style="border-radius: 25px;width: 50px;height: 50px;">
	                                                	&nbsp;&nbsp;&nbsp;<strong><?php echo $row->nome; ?></strong><br>
	                                                </a>
	                                                <small><i><?php echo $row->data_post; ?></i></small>
	                                            </div>
	                                            <br>
	                                            <p><?php echo $row->post; ?></p>
	                                            <div class="timeline-item-post" style="margin: 0;text-align: center;">
                                            		<a href="" data-toggle="modal" data-target="#myModal<?php echo $row->id_post; ?>">
                                                		<img src="img_post/<?php echo $row->img_post; ?>" style="width: 428.75px;height: 428.75px;">
                                            		</a>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </li>
	                                <div id="myModal<?php echo $row->id_post; ?>" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
									    <div class="modal-dialog modal-lg">
									        <div class="modal-content" style="border-radius: 20px;">
									            <div class="modal-header" style="height: 25px;border: none;">
									                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									            </div>
									            <div class="modal-body">
									                <div class="row">
									                    <div class="col-md-8 col-sm-12">
									                    	<img src="img_post/<?php echo $row->img_post; ?>" style="height: 500px;width: 100%;">
									                    	<br>
									                    </div>
									                    <div class="col-md-4 col-sm-12">
									                    	<div class="row">
									                        	<div class="col-md-12 col-sm-12" style="height: 500px;overflow: scroll;overflow-x: hidden;">
									                            	<div class="row">
										                            	<div class="col-md-12 col-sm-12">
											                            	<br>
											                            	<a href="visit_perfil.php?id=<?php echo $row->id_usuario ?>" style="text-decoration: none;color: black;">
												                                <img src="img_user/<?php echo $row->foto_perfil; ?>" style="border-radius: 25px;width: 45px;height: 45px;">
												                                &nbsp;<strong><?php echo $row->nome; ?></strong>
											                            	</a><br>
											                                <small><i><?php echo $row->data_post; ?></i></small><br>
											                                <p><?php echo $row->post; ?></p>
											                            </div>
											                        </div>
											                        <?php 
											                        $id_post2 = $row->id_post;
																		$sqlcoment = mysqli_query($conn,"SELECT DATE_FORMAT(c.data_coment, '%d/%m/%Y %H:%i:%s') as data_coment,c.comentario,u.nome,u.id_usuario,u.foto_perfil FROM comentario as c
																			INNER JOIN usuario as u ON u.id_usuario = c.id_usuario
																			WHERE c.id_post = $id_post2 LIMIT 1");
																		$numcoment = mysqli_num_rows($sqlcoment);
																		$rowcoment = mysqli_fetch_object($sqlcoment);
																	?>
											                        <h4>Comentários</h4><br>
											                        <?php if ($numcoment != 0) { ?>
											                        	<div class="row">
												                        	<div class="col-md-12 col-sm-12">
												                        		<a href="visit_perfil.php?id=<?php echo $rowcoment->id_usuario ?>" style="text-decoration: none;color: black;">
													                        		<img src="img_user/<?php echo $rowcoment->foto_perfil; ?>" style="width: 35px;border-radius: 25px;">
													                        		<strong><?php echo $rowcoment->nome; ?></strong>
													                        	</a>
													                        	<br>
												                                <small><i><?php echo $rowcoment->data_coment; ?></i></small><br>
												                        		<p style="font-size: 0.9em;"><?php echo $rowcoment->comentario; ?></p>
												                        		<br>
												                        	</div>
												                        </div>
											                        <?php }else{ ?>
											                        	<div class="row">
												                        	<div class="col-md-12 col-sm-12">
												                        		<code style="background-color: transparent;"><i>Nenhum comentário feito . . .</i></code>
												                        		<br>
												                        	</div>
												                        </div>
											                        <?php } ?>
											                    </div>
											                </div>
										                    <div class="row" style="position:fixed;z-index:999;overflow:hidden;margin-top: -20px;">
									                       		<div class="col-md-12 col-sm-12">
									                       			<form action="envia_coment.php" method="POST">
															        	<input type="text" class="form-control" name="" placeholder="Comentar" style="height: 30px;width: 265px;">
															        </form>
															    </div> 
									                       	</div>
									                    </div>
									                </div>	
									            </div>
									        </div>
									    </div>
									</div>
	                            </ul>
	                        </div>
                    	</div>

						<div class="col-md-3 col-sm-3" style="position: fixed;float: right;margin-left: 75%;height: 80%;z-index: 998;">
							<br><br>
							<a href="perfil.php" style="text-decoration: none;color: black;">
	                        	<img src="img_user/<?php echo $fotomini->foto_perfil ?>" style="width: 70px;height: 70px;border-radius: 25px;">
	                        	<strong><?php echo $fotomini->nome; ?></strong>
	                        </a>
	                        <br><br>
	                        <strong>Curso:</strong> <?php echo $fotomini->curso; ?>
	                        <br><br>
	                        <?php 
								$sqlultima = mysqli_query($conn,"SELECT u.nome FROM postagem as p INNER JOIN usuario as u ON u.id_usuario = p.id_usuario ORDER BY p.data_post DESC LIMIT 5");
								;
							?>
	                        <h4>Últimas Atividades</h4>
	                        <ul style="text-decoration: none;list-style-type: none;">
	                        	<?php while ($rowultima = mysqli_fetch_object($sqlultima)) { ?>
	                        		<li>Post do <?php echo $rowultima->nome; ?></li>
	                        		<br>
	                        	<?php } ?>
	                        </ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<a href="#gotop" style="margin-right:25px;width: 50px;float: right;z-index: 9999;"><i class="glyphicon glyphicon-chevron-up"></i></a>


		<?php include("footer.php"); ?>
		<style type="text/css">.footer{color: black !important;margin-top: 8px;padding: 5px;}</style>
		<?php include("script.php"); ?>
		
	</body>

</html>