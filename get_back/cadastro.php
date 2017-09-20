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
        <![endif]

        AQUI!!!!-->


    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>CADASTRO DE CLIENTES COM BANCO DE DADOS E PHP</title>
      <style type="text/css">
        <!--
        .style1 {
        color: #FF0000;
         font-size: x-small;
        }
        .style3 {color: #0000FF; font-size: x-small; }
      </style>
    <script type="text/javascript">
      function validaCampo()
    {
    if(document.cadastro.nome.value=="")
    {
      alert("O Campo nome é obrigatório!");
    return false;
    }
    else
     if(document.cadastro.email.value=="")
    {
     alert("O Campo email é obrigatório!");
    return false;
    }
    else
    if(document.cadastro.cidade.value=="")
    {
      alert("O Campo Cidade é obrigatório!");
    return false;
    }
    else
      if(document.cadastro.estado.value=="")
    {
      alert("O Campo Estado é obrigatório!");
    return false;
    }
    else
      if(document.cadastro.bairro.value=="")
    {
      alert("O Campo Bairro é obrigatório!");
    return false;
    }
    else
      if(document.cadastro.pais.value=="")
    {
      alert("O Campo país é obrigatório!");
    return false;
    }
    else
      if(document.cadastro.login.value=="")
    {
      alert("O Campo Login é obrigatório!");
    return false;
    }
    else
      if(document.cadastro.senha.value=="")
    {
      alert("Digite uma senha!");
    return false;
    }
    else
    return true;
    }
    /*<!-- Fim do JavaScript que validará os campos obrigatórios! -->
    </script>
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


    <form id="cadastro" name="cadastro" method="post" action="cadastro.php" onsubmit="return validaCampo(); return false;">
      <table width="625" border="0">
        <tr>
          <td width="69">Nome:</td>
          <td width="546"><input name="nome" type="text" id="nome" size="70" maxlength="60" />
            <span class="style1">*</span></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input name="email" type="text" id="email" size="70" maxlength="60" />
          <span class="style1">*</span></td>
        </tr>
        
        <tr>
          <td>DDD:</td>
          <td><input name="ddd" type="text" id="ddd" size="4" maxlength="2" />
          Telefone:
            <input name="telefone" type="text" id="telefone" />
            <span class="style3">Apenas números</span> </td>
        </tr>
        
        <tr>
          <td>Cidade:</td>
          <td><input name="cidade" type="text" id="cidade" maxlength="20" />
            <span class="style1">*</span></td>
        </tr>
        <tr>
          <td>Estado:</td>
          <td><select name="estado" id="estado">
            <option>Selecione...</option>
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AP">AP</option>
            <option value="AM">AM</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="ES">ES</option>
            <option value="DF">DF</option>
            <option value="MA">MA</option>
            <option value="MT">MT</option>
            <option value="MS">MS</option>
            <option value="MG">MG</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PR">PR</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SP">SP</option>
            <option value="SE">SE</option>
            <option value="TO">TO</option>
              </select>
            <span class="style1">*      </span></td>
        </tr>
        <tr>
          <td>Bairro:</td>
          <td><input name="bairro" type="text" id="bairro" maxlength="20" />
            <span class="style1">*</span></td>
        </tr>
        <tr>
          <td>País:</td>
          <td><input name="pais" type="text" id="pais" maxlength="20" />
            <span class="style1">*</span></td>
        </tr>
        <tr>
          <td>Login:</td>
          <td><input name="login" type="text" id="login" maxlength="12" />
            <span class="style1">*</span></td>
        </tr>
        <tr>
          <td>Senha:</td>
          <td><input name="senha" type="password" id="senha" maxlength="12" />
              <span class="style1">*</span></td>
        </tr>
        
        <tr>
          <td colspan="2"><p>
            <input name="cadastrar" type="submit" id="cadastrar" value="Concluir meu Cadastro!" />
           
     
              <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />
             
     
              <span class="style1">* Campos com * são obrigatórios!          </span></p>
          <p>  </p></td>
        </tr>
      </table>
    </form>
    <footer>
      <div class="page-inner">
        <div class="page-footer">
                  <p class="no-s">2015 &copy; Modern by Steelcoders.</p>
              </div>
            </div>
    </footer>

    </body>
</html>