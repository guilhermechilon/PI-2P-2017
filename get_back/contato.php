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
	             <br><br>
	                  <div class="col-md-8 col-sm-12" style="text-align:center;">
	                    <form action="submit.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
	                      <div class="row">
	                        <div class="col-md-12 col-sm-12">   
	                          <br>       
	                          <div class="form-group">
	                            <div class="col-md-2 col-sm-2">
	                              <label for="input-rounded" class="col-sm-2 control-label">Nome</label>
	                            </div>
	                            <div class="col-md-6 col-sm-10">
	                              <input style="border-color: #dc0909;" type="text" class="form-control input-rounded" name="nome">
	                            </div>
	                          </div>
                          <div class="form-group">
	                            <div class="col-md-6 col-sm-2">
	                              <label for="input-rounded" class="col-sm-2 control-label">Email</label>
	                            </div>
	                            <div class="col-md-3 col-sm-10">
	                              <input style="border-color: #dc0909;" type="text" class="form-control input-rounded" name="email">
	                            </div>
	                          </div>
                          <div class="form-group">
	                            <div class="col-md-2 col-sm-2">
	                              <label for="input-rounded" class="col-sm-2 control-label">Assunto</label>
	                            </div>
	                            <div class="col-md-6 col-sm-10">
	                              <input style="border-color: #dc0909;" type="text" class="form-control input-rounded" name="assunto" >
	                            </div>
	                          </div>
                          <textarea class="form-control" name="text" rows="4" style="resize: none;border-color: #dc0909;" placeholder="Digite sua mensagem" required></textarea>
	                          <div class="form-group" style="text-align: center;">
	                            <button type="submit" class="btn btn-default" style="border: solid 1px;border-radius: 15px;border-color: #dc0909;background-color: #dc0909;color: white;">Salvar Mudanças</button> 
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
