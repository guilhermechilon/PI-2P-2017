<?php include_once("seguranca.php"); 
      $id = $_GET['id'];
      if ($id == $id_usuario) {
        header("Location: perfil.php");
      }
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
                        	<a href="chat.php?usuario=<?php echo $id; ?>" class="btn btn-primary" onclick="window.open(this.href,'galeria','width=680,height=630'); return false;" style="background-color: #dc0909;border-color: #dc0909;text-align: center;border-radius: 15px;">Enviar Mensagem</a>
                        </div>
                    </div>
	            </div>
	        </div>
	    </div>

		<?php include("footer.php"); ?>

		<?php include("script.php"); ?>
		
		<style>
			.footer{
				position:absolute;
				bottom:0;
        color: black !important;
			}
		</style>
	</body>
</html>