<!DOCTYPE html>
<html>

<head>
    <title>Admin FIST</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

</head>

<body>
    <section>
        <div class="page-content container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-wrapper">
                        <div class="box">
                            <div class="content-wrap">
                                <img height="70px" src="images/admin.png">
                                <br/>
                                <br/>
                                <h3>ACESSO ADM</h3>
                                <br>
                                <form class="form-vertical" method="post" action="Usuario_Autenticar.php">
                                    <input class="form-control" type="text" name="login" id="login" placeholder="Usuário" required="required">
                                    <input class="form-control" type="password" name="senha" id="senha" placeholder="Senha" required="required">
                                    <div class="action">
                                        <button type="submit" class="btn btn-primary">Entrar</button> &nbsp;&nbsp;
                                        <a href="#" type="button" class="btn btn-default">Esqueceu a senha?</a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <a href="/" type="button" class="btn btn-link" title="Site Cliente"><i class="fas fa-backward"></i></a>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
