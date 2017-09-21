<html>
    <head>
        <?php include("head.php"); ?>
    </head>

    <body>
    
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
            
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>

        <?php include("footer.php"); ?>
    </body>
</html>