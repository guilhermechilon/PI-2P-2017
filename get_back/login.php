<!DOCTYPE html>
<html>
    <head>
        <?php include("head.php"); ?>
    </head>
    <body>
        <form method="post" action="validarlogin.php">
            <div class="form-group">
                <label>E-mail</label>
                <input name="email" type="email" class="form-control" placeholder="Email" required>
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input name="senha" type="password" class="form-control" placeholder="Senha" required>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
    </body>
</html>