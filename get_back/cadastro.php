<html>
    <head>
        <?php include("head.php"); ?>
    </head>

    <body style="background-image: url(img/wall2.jpg);background-repeat: no-repeat;">
        <section>
            <div class="container">
                <div class="row">
                    <br><br><br><br><br><br>
                    <div class="col-md-4 col-sm-12">
                        <form method="POST" action="validarcadastro.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>E-mail</label>
                                <input name="email" type="email" class="form-control" placeholder="E-mail" required>
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label>Senha</label>
                                <input name="senha" type="password" class="form-control" placeholder="Senha" required>
                            </div>
                            <div class="form-group">
                                <label>Nome</label>
                                <input name="nome" type="text" class="form-control" placeholder="Nome" required>
                                
                            </div>
                            <div class="form-group">
                                <label>Curso</label>
                                <input name="curso" type="text" class="form-control" placeholder="Curso">
                                
                            </div>
                            <div class="form-group">
                                <label>Foto de Perfil</label>
                                <input type="file" name="img" required/>
                            </div>

                            <a href="login.php"><input type="button" class="btn btn-primary" style="background-color: #dc0909;border-color: #dc0909;" value="Já possuo uma conta"></a>                            
                            <button type="submit" class="btn btn-primary" style="background-color: #dc0909;border-color: #dc0909;float: right;">Entrar</button>
                        </form>
                    </div>
                    <div class="col-md-6 col-md-offset-2 col-sm-12" style="font-family: 'Anton', sans-serif;">
                        <h2>CADASTRE, PROCURE E ACHE SEU ITEM.</h2>
                        <br>
                        <h4>A melhor forma de reaver seus itens perdidos.</h4>
                        <h4 style="float: right;">Com confidencialidade e segurança.</h4>
                        <br><br>
                        <h5 style="float: right;color: black;font-family: 'Bitter', serif;"><i>The Things Get Back.</i></h5>
                    </div>
                </div>
            </div>
        </section>

        <?php include("script.php"); ?>
    </body>
</html>