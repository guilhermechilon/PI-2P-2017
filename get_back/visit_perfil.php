<?php session_start();

	//verifica se existe dados na sessao
	if(isset($_SESSION['id_usuario'])) {
	  $id_usuario = $_SESSION['id_usuario'];
	  $id = $_GET['id'];
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
		<br><br><br><br>
		<div class="container">
			<div class="row">
	            <div class="col-md-12 col-sm-12">
		            <?php
		                $sqlprofile =  mysqli_query($conn,"SELECT u.email,u.nome,u.curso,u.foto_perfil FROM usuario as u 
							WHERE u.id_usuario = $id");
		                $profile = mysqli_fetch_object($sqlprofile);

		            ?>
	              	<br><br>
                  	<div class="col-md-4 col-sm-6" style="text-align: center;">
                  		<img src="img_user/<?php echo $profile->foto_perfil ?>" style="width: 300px;height: 300px;text-align: center;">
                  	</div>
                  	<div class="col-md-8 col-sm-12" style="text-align:center;">
                      <br><br><br>
                        <div class="col-md-3 col-sm-2">
                          <label for="input-rounded" class="col-sm-2 control-label">Nome</label>
                        </div>
                        <div class="col-md-9 col-sm-10">
                          <?php echo $profile->nome; ?>
                        </div><br><br>
                        <div class="col-md-3 col-sm-2">
                          <label for="input-rounded" class="col-sm-2 control-label">Email</label>
                        </div>
                        <div class="col-md-9 col-sm-10">
                        	<?php echo $profile->email; ?>
                        </div><br><br>
                        <div class="col-md-3 col-sm-2">
                          <label for="input-rounded" class="col-sm-2 control-label">Curso</label>
                        </div>
                        <div class="col-md-9 col-sm-10">
                          <?php echo $profile->curso; ?>
                        </div>
                        <br><br>
                        <div class="col-md-12 col-sm-10" style="float: left !important;">
                        	<a href="chat.php" class="btn btn-primary" style="background-color: #dc0909;border-color: #dc0909;text-align: center;border-radius: 15px;">Enviar Mensagem</a>
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
                        <label class="btn btn-default btn-file">
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
		
		<style>
			.footer{
				position:absolute;
				bottom:0;
			}
		</style>
	</body>
</html>