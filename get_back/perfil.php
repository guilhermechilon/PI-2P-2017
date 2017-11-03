<?php include_once("seguranca.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<?php include("head.php"); ?>
	</head>
	<body>
		<?php include("header.php"); ?>
		<br><br><br><br>
		<div class="container">
			<div class="row">
	            <div class="col-md-12 col-sm-12">
	              <?php
	                $sqlprofile =  mysqli_query($conn,"SELECT u.email,u.nome,u.curso,u.foto_perfil FROM usuario as u 
						WHERE u.id_usuario = $id_usuario");
	                $profile = mysqli_fetch_object($sqlprofile);

	              ?>
	              <br><br>
	                  
	                  <div class="col-md-4 col-sm-6" style="text-align: center;">
	                    <a href="" data-toggle="modal" data-target="#myModal" style="z-index: 1;position: relative;"><img src="img_user/<?php echo $profile->foto_perfil ?>" style="width: 300px;height: 300px;text-align: center;"></a>
	                    <a href="" data-toggle="modal" data-target="#myModal" style="text-decoration: none;"><div style="height: 20px;margin: 0 auto;width: 300px;background-color: black;position: relative;opacity: 0.5;z-index: 999;margin-top: -20px;font-size: 1em;"><p style="color: white;"><strong>Editar foto</strong></p></div></a>
	                  </div>
	                  <div class="col-md-8 col-sm-12" style="text-align:center;">
	                    <form action="editausuario.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
	                      <div class="row">
	                        <div class="col-md-12 col-sm-12">   
	                          <br>       
	                          <div class="form-group">
	                            <div class="col-md-3 col-sm-2">
	                              <label for="input-rounded" class="col-sm-2 control-label">Nome</label>
	                            </div>
	                            <div class="col-md-3 col-sm-10">
	                              <input style="border-color: #dc0909;" type="text" class="form-control input-rounded" name="nome" value="<?php echo $profile->nome; ?>">
	                            </div>
	                          </div>
	                          <div class="form-group">
	                            <div class="col-md-3 col-sm-2">
	                              <label for="input-rounded" class="col-sm-2 control-label">Curso</label>
	                            </div>
	                            <div class="col-md-3 col-sm-10">
	                              <input style="border-color: #dc0909;" type="text" class="form-control input-rounded" name="curso" value="<?php echo $profile->curso; ?>">
	                            </div>
	                          </div>
	                          <div class="form-group" style="text-align: center;">
	                            <button type="submit" class="btn btn-default" style="border: solid 1px;border-radius: 15px;border-color: #dc0909;background-color: #dc0909;color: white;">Salvar Mudanças</button> 
	                          </div>
	                        </div>
	                      </div>
	                    </form>
	                	<div class="col-md-12 col-sm-12">
		                	<div class="form-group">
		                        <div class="col-md-3 col-sm-2">
		                          <label for="input-rounded" class="col-sm-2 control-label">Email</label>
		                        </div>
		                        <div class="col-md-3 col-sm-10">
		                        	<?php echo $profile->email; ?>
		                        </div>
	                    	</div>
	                    	<br>
		                </div>
	                </div>
	            </div>
	        </div>
	    </div>

		<?php include("footer.php"); ?>

		<div class="col-md-4">
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Trocar Foto de Perfil</h4>
                </div>
                <div class="modal-body">
                  <form action="editafotoperfil.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    <div class="form-group">
                        <label class="btn btn-default btn-file" style="margin-left: 10px;">
                            Carregar Imagem<input type="file" class="form-control-file" name="imagem" style="display: none;" required>
                    </div>
                    <br>
                    <div class="form-group" style="text-align: center;">
                      <button type="submit" class="btn btn-default" style="width:50%;border-color: #2A2A2A;border-radius:15px;">Salvar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

		<?php include("script.php"); ?>

		<?php include("footer.php"); ?>
		
		<style type="text/css">.footer{color: black !important;margin-top: 8px;padding: 5px;position:absolute !important;bottom:0 !important;}</style>
		
	</body>
</html>