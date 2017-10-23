<?php session_start();

	//verifica se existe dados na sessao
	if(isset($_SESSION['id_usuario'])) {
	  $id_usuario = $_SESSION['id_usuario'];
	} else {
	  header("Location: login.php");
	}
	include("conexao.php"); ?>
<header style="position: fixed;z-index: 999;width: 100%;">
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
	    	<?php $minifoto = mysqli_query($conn,"SELECT * FROM usuario as u WHERE id_usuario = $id_usuario"); 
	    	$fotomini = mysqli_fetch_object($minifoto); ?>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    	<form class="navbar-form navbar-left">
		        	<div class="form-group">
		          		<input type="text" class="form-control" placeholder="Pesquisar" style="border-radius: 20px;">
		        	</div>
		        	<button type="submit" class="btn btn-default" style="border-radius: 20px;"><span class="glyphicon glyphicon-search"></span></button>
		      	</form>
		      	<ul class="nav navbar-nav">
		        	<li><a href="meus_posts.php">Meus Posts<span class="sr-only">(current)</span></a></li>
		        	<li><a href="posts_comentados.php">Posts Comentados</a></li>
		      	</ul>
		      	<ul class="nav navbar-nav navbar-right">
		        	<li class="dropdown">
		          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img_user/<?php echo $fotomini->foto_perfil ?>" style="width: 45px;height: 45px;border-radius: 25px;"><span class="caret"></span></a>
		          		<ul class="dropdown-menu">
			            	<li><a href="perfil.php">Perfil</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="logout.php">Sair</a></li>
		          		</ul>
		        	</li>
		      	</ul>
			</div><!-- /.navbar-collapse -->
	  	</div><!-- /.container-fluid -->
	</nav>
</header>