<?php session_start();
    //verifica se existe dados na sessao
    if(isset($_SESSION['loginErro'])) {
      $login_erro = $_SESSION['loginErro'];
    } else {
      header("Location: login.php");
    }
    include("conexao.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include("head.php"); ?>
    </head>
    <body style="background-image: url(img/wall.jpg);background-size: 100%;background-repeat: no-repeat;">
        <section style="">
            <div class="container">
                <div class="row">
                    <br><br><br><br><br><br><br>
                    <div class="col-md-6 col-sm-12" style="font-family: 'Anton', sans-serif;">
                        <h2>CADASTRE, PROCURE E ACHE SEU ITEM.</h2>
                        <br>
                        <h4>A melhor forma de reaver seus itens perdidos.</h4>
                        <h4 style="float: right;">Com confidencialidade e segurança.</h4>
                        <br><br>
                        <h5 style="float: right;color: white;font-family: 'Bitter', serif;"><i>The Things Get Back.</i></h5>
                    </div>
                    <div class="col-md-4 col-md-offset-2 col-sm-12">
                        <br><br><br><br>
                        <form method="post" action="validarlogin.php">
                            <?php echo $login_erro; ?>
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="Email" required>
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <input name="senha" type="password" class="form-control" placeholder="Senha" required>
                            </div>
                            <button type="submit" class="btn btn-primary" style="background-color: #dc0909;border-color: #dc0909;">Entrar</button>
                            <a href="cadastro.php" style="float: right;"><input type="button" class="btn btn-primary" style="background-color: #dc0909;border-color: #dc0909;" value="Cadastrar"></a>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <?php include("footer.php"); ?>

        <?php include("script.php"); ?>

        <style>
            .footer{
                position:absolute;
                bottom:0;
            }
        </style>
    </body>
</html>