<?php 
	$sqlpost = mysqli_query($conn,"SELECT DATE_FORMAT(p.data_post, '%d/%m/%Y %H:%i:%s') as data_post,p.id_post,p.id_usuario,p.post,p.img_post,u.nome,u.foto_perfil FROM postagem as p 
								INNER JOIN usuario as u ON u.id_usuario = p.id_usuario WHERE p.id_post = 1 LIMIT 1");
	$rowpost = mysqli_fetch_object($sqlpost);
?>
<div class="col-md-4 col-sm-8">
    <div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="height: 25px;border: none;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                        	<img src="img_post/<?php echo $rowpost->img_post; ?>" style="height: 500px;width: 100%;">
                        	<br>
                        </div>
                        <div class="col-md-4 col-sm-12">
                        	<div class="row">
                            	<div class="col-md-12 col-sm-12" style="height: 500px;overflow: scroll;overflow-x: hidden;">
	                            	<div class="row">
		                            	<div class="col-md-12 col-sm-12">
			                            	<br>
			                            	<a href="#" style="text-decoration: none;color: black;">
				                                <img src="img_user/<?php echo $rowpost->foto_perfil; ?>" style="border-radius: 25px;width: 45px;height: 45px;">
				                                &nbsp;<strong><?php echo $rowpost->nome; ?></strong>
			                            	</a><br>
			                                <small><?php echo $rowpost->data_post; ?></small><br>
			                                <p><?php echo $rowpost->post; ?></p>
			                            </div>
			                        </div>
			                        <h4>Comentários</h4><br>
			                        <div class="row">
			                        	<div class="col-md-12 col-sm-12">
			                        		<a href="#" style="text-decoration: none;color: black;">
				                        		<img src="assets/images/avatar3.png" style="width: 35px;border-radius: 25px;">
				                        		<strong>Juao Pedrin</strong>
				                        	</a>
			                        		<p style="font-size: 0.9em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			                        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
			                        		<br>
			                        	</div>
			                        </div>
			                        <div class="row">
			                        	<div class="col-md-12 col-sm-12">
			                        		<a href="#" style="text-decoration: none;color: black;">
				                        		<img src="assets/images/avatar3.png" style="width: 35px;border-radius: 25px;">
				                        		<strong>Juao Pedrin</strong>
				                        	</a>
			                        		<p style="font-size: 0.9em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			                        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
			                        		<br>
			                        	</div>
			                        </div>
			                        <div class="row">
			                        	<div class="col-md-12 col-sm-12">
			                        		<a href="#" style="text-decoration: none;color: black;">
				                        		<img src="assets/images/avatar3.png" style="width: 35px;border-radius: 25px;">
				                        		<strong>Juao Pedrin</strong>
				                        	</a>
			                        		<p style="font-size: 0.9em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			                        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
			                        		<br>
			                        	</div>
			                        </div>
			                        <div class="row">
			                        	<div class="col-md-12 col-sm-12">
			                        		<a href="#" style="text-decoration: none;color: black;">
				                        		<img src="assets/images/avatar3.png" style="width: 35px;border-radius: 25px;">
				                        		<strong>Juao Pedrin</strong>
				                        	</a>
			                        		<p style="font-size: 0.9em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			                        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
			                        		<br>
			                        	</div>
			                        </div>
			                        <div class="row">
			                        	<div class="col-md-12 col-sm-12">
			                        		<a href="#" style="text-decoration: none;color: black;">
				                        		<img src="assets/images/avatar3.png" style="width: 35px;border-radius: 25px;">
				                        		<strong>Juao Pedrin</strong>
				                        	</a>
			                        		<p style="font-size: 0.9em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			                        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
			                        		<br>
			                        	</div>
			                        </div>
			                    </div>
			                </div>
		                    <div class="row" style="position:fixed;z-index:999;overflow:hidden;margin-top: -20px;">
	                       		<div class="col-md-12 col-sm-12">
							        <input type="text" class="form-control" name="" placeholder="Comentar" style="height: 30px;width: 260px;">
							    </div> 
	                       	</div>
                        </div>
                    </div>	
                </div>
            </div>
        </div>
    </div>
</div>
