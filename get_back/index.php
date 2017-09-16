<!DOCTYPE html>
<html>
	<head>
		<title>Achados e Perdidos</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="icon" href="#">

		<!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
        
        <!-- Theme Styles -->
        
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
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
				        	<li><a href="meus_posts.php">Meus Posts<span class="sr-only">(current)</span></a></li>
				        	<li><a href="posts_comentados.php">Posts Comentados</a></li>
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

		<section>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="profile-timeline">
                            <ul class="list-unstyled">
                                <li class="timeline-item">
                                    <div class="panel panel-dark">
                                        <div class="panel-body">
                                            <div class="timeline-item-header">
                                                <img src="assets/images/avatar3.png" alt="" style="border-radius: 25px;">
                                                <p>Christopher palmer <span>Posted a Status</span></p>
                                                <small>5 hours ago</small>
                                            </div>
                                            <div class="timeline-item-post" style="text-align: center;">
                                                <a href="" data-toggle="modal" data-target=".bs-example-modal-lg"><img src="img/perfil.jpg" width="350" height="300"></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
					<div class="col-md-3"></div>
				</div>
			</div>
		</section>

		<br><br><br>

		<footer>
			<div class="page-inner">
				<div class="page-footer">
                	<p class="no-s">2015 &copy; Modern by Steelcoders.</p>
            	</div>
            </div>
		</footer>

		<div class="col-md-4 col-sm-8">
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header" style="height: 25px;border: none;">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
	                        <div class="row">
	                            <div class="col-md-8 col-sm-12">
	                            	<img src="img/perfil.jpg" style="height: 500px;width: 100%;">
	                            	<br>
	                            </div>
	                            <div class="col-md-4 col-sm-12">
	                            	<div class="row">
		                            	<div class="col-md-12 col-sm-12" style="height: 500px;overflow: scroll;">
			                            	<div class="row">
				                            	<div class="col-md-12 col-sm-12">
					                            	<br>
					                                <img src="assets/images/avatar3.png" style="width: 45px;border-radius: 25px;">
					                                <h4>Christopher palmer</h4>
					                                <small>5 hours ago</small>
					                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					                                consequat. Duis aute irure dolor in reprehenderi.</p>
					                            </div>
					                        </div>
					                        <h4>Comentários</h4><br>
					                        <div class="row">
					                        	<div class="col-md-12 col-sm-12">
					                        		<h5>Juao Pedrin</h5>
					                        		<img src="assets/images/avatar3.png" style="width: 35px;border-radius: 25px;">
					                        		<p style="font-size: 0.9em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					                        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					                        		<br>
					                        	</div>
					                        </div>
					                        <div class="row">
					                        	<div class="col-md-12 col-sm-12">
					                        		<h5>Juao Pedrin</h5>
					                        		<img src="assets/images/avatar3.png" style="width: 35px;border-radius: 25px;">
					                        		<p style="font-size: 0.9em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					                        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					                        		<br>
					                        	</div>
					                        </div>
					                        <div class="row">
					                        	<div class="col-md-12 col-sm-12">
					                        		<h5>Juao Pedrin</h5>
					                        		<img src="assets/images/avatar3.png" style="width: 35px;border-radius: 25px;">
					                        		<p style="font-size: 0.9em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					                        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					                        		<br>
					                        	</div>
					                        </div>
					                    </div>
					                </div>
				                    <div class="row" style="position:fixed;z-index:999;overflow:hidden;margin-top: -20px;">
			                       		<div class="col-md-12 col-sm-12">
									        <input type="text" class="form-control" name="" placeholder="Comentar">
									    </div> 
			                       	</div>
	                            </div>
	                        </div>	
                        </div>
                    </div>
                </div>
            </div>
        </div>

	</body>
	<script src="jquery/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</html>