<?php include_once("seguranca.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<?php include("head.php"); ?>
	</head>
	<body style="background-image: url(img/wall.jpg);background-size: 100%;background-repeat: no-repeat;">
		<?php include("header.php"); ?>
		<br><br>
		<div class="container-fluid" style="height: 100%;">
			<div class="row">
	            <div class="col-md-12 col-sm-12">
	             <br><br>
	                  <div class="col-md-8 col-md-offset-2 col-sm-12" style="text-align:center;">
	                    <form action="submit.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
	                      <div class="row">
	                        <div class="col-md-12 col-sm-12">   
	                          <br>       
	                          <div class="form-group">
	                            <div class="col-md-6 col-sm-12" style="padding: 10px;">
	                              <input style="border-color: #dc0909;" type="text" class="form-control input-rounded" placeholder="Nome" name="nome">
	                            </div>
	                            <div class="col-md-6 col-sm-12" style="padding: 10px;">
	                              <input style="border-color: #dc0909;" type="text" class="form-control input-rounded" placeholder="Email" name="email">
	                            </div>
	                          </div>
                          	<div class="form-group">
	                            <div class="col-md-12 col-sm-12" style="padding: 10px;">
	                              <input style="border-color: #dc0909;" type="text" class="form-control input-rounded" placeholder="Assunto" name="assunto" >
	                            </div>
	                        </div>
	                        <div class="col-md-12 col-sm-12"  style="padding: 10px;">
                          		<textarea class="form-control" name="msg" rows="4" style="resize: none;border-color: #dc0909;" placeholder="Digite sua mensagem" required></textarea>
                          	</div>
	                          <div class="form-group" style="text-align: center;">
	                            <button type="submit" class="btn btn-default" style="border: solid 1px;border-radius: 15px;border-color: #dc0909;background-color: #dc0909;color: white;">Enviar Mensagem</button> 
	                          </div>
	                        </div>
	                      </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>

		<?php include("footer.php"); ?>

		<?php include("script.php"); ?>

		<?php include("footer.php"); ?>
		
		<style type="text/css">.footer{color: black !important;margin-top: 8px;padding: 5px;position:absolute !important;bottom:0 !important;}</style>
		
	</body>
</html>
