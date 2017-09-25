<!DOCTYPE html>
<html>
	<head>
		<title>Achados e Perdidos</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="icon" href="#">
	</head>
	<body>

		<header>
			<nav class="navbar navbar-default">
			  	<div class="container-fluid">
			    	<!-- Brand and toggle get grouped for better mobile display -->
			    	<div class="navbar-header">
			      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
			      		</button>
			      		<a class="navbar-brand" href="index.php">
			      			<img alt="logo" src="#">
			      		</a>
			    	</div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				    	<form class="navbar-form navbar-left">
				        	<div class="form-group">
				          		<input type="text" class="form-control" placeholder="Pesquisar">
				        	</div>
				        	<button type="submit" class="btn btn-default">O</button>
				      	</form>
				      	<ul class="nav navbar-nav">
				        	<li class="active"><a href="#">Meus Posts<span class="sr-only">(current)</span></a></li>
				        	<li><a href="#">Posts Comentados</a></li>
				      	</ul>
				      	<ul class="nav navbar-nav navbar-right">
				        	<li class="dropdown">
				          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img alt="logo" src="img/perfil.jpg" style="width: 40px;height: 35px;border-radius: 20px;"><span class="caret"></span></a>
				          		<ul class="dropdown-menu">
					            	<li><a href="#">Perfil</a></li>
						            <li><a href="#">Another action</a></li>
						            <li><a href="#">Something else here</a></li>
						            <li role="separator" class="divider"></li>
						            <li><a href="#">Logout</a></li>
				          		</ul>
				        	</li>
				      	</ul>
					</div><!-- /.navbar-collapse -->
			  	</div><!-- /.container-fluid -->
			</nav>
		</header>


		<?php include("script.php"); ?>
	</body>
</html>