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
    
    <form method="post" action="validarcadastro.php">
    <div class="form-group">
        <label for="exampleInputEmail1">E-mail</label>
        <input name="email" type="email" class="form-control"  aria-describedby="emailHelp" placeholder="E-mail" required>
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Senha</label>
        <input name="senha" type="password" class="form-control"  placeholder="Senha" required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nome</label>
        <input name="nome" type="text" class="form-control" placeholder="Nome" required>
        
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Curso</label>
        <input name="curso" type="text" class="form-control" placeholder="Curso">
        
    </div>
    
        <label for="exampleInputEmail1">Foto de Perfil</label>
        <input name="foto" type="file" required>
        
    
    <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
    </body>
</html>