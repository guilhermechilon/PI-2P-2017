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
	      		<a class="navbar-brand" href="index.php" title="Home">
	      			<img alt="logo" src="img/GetBackIcone.png" style="padding: 3px;margin-top: -5px;width:46px;">
	      		</a>
	    	</div>
	    	<?php $minifoto = mysqli_query($conn,"SELECT * FROM usuario as u WHERE id_usuario = $id_usuario"); 
	    	$fotomini = mysqli_fetch_object($minifoto); ?>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-top: 7px;">
		    	<form action="busca.php" method="POST" class="navbar-form navbar-left">
		        	<div class="form-group">
		          		<input type="text" name="busca" class="form-control" placeholder="Pesquisar" style="border-radius: 20px;">
		        	</div>
		        	<button type="submit" class="btn btn-default" style="border-radius: 20px;"><span class="glyphicon glyphicon-search"></span></button>
		      	</form>
		      	<ul class="nav navbar-nav">
		        	<li style="margin-left: 5px;margin-right: 5px;"><a href="meus_posts.php">Meus Posts</a></li>
		        	<li style="margin-left: 5px;margin-right: 5px;"><a href="posts_comentados.php">Posts Comentados</a></li>
					<li style="margin-left: 5px;margin-right: 5px;"><a href="chat.php">Contato</a></li>
		      	</ul>
		      	<?php $sqlmsg = mysqli_query($conn,"SELECT m.id_de FROM mensagens as m WHERE m.visualizado = '1' && m.id_para = '$id_usuario' GROUP BY m.id_de ORDER BY MAX(m.data_hora) DESC"); 
	    		$nummsg = mysqli_num_rows($sqlmsg);?>
		      	<ul class="nav navbar-nav navbar-right">
		      		<li style="margin-right: 25px;margin-top: 12px;"><small title="Mensagens Recebidas"><a href="mensagens.php" class="img"><span class="num"><?php echo $nummsg; ?></span></a></small></a></li>
		        	<li class="dropdown" style="margin-top: -10px;">
		          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img_user/<?php echo $fotomini->foto_perfil ?>" style="width: 40px;height: 40px;border-radius: 25px;"><span class="caret"></span></a>
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
<style type="text/css">
	a.img {
  position: relative;
  display: block;
  height: 28px;
  width: 28px;
  background: url('img/icon.png');
  background-size: contain;
  background-repeat: no-repeat;
  text-decoration: none;
}
.num {
  position: absolute;
  right: 3px;
  color: #fff;
  font-size: 0.9em;
}
</style>