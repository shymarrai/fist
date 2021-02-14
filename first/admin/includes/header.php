<?php session_start(); ?>
<?php
   if(!isset($_SESSION['login'])) header("location: login.php");  
?>



    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>FIST ADMIN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- styles -->
        <link href="css/styles.css" rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>


    </head>

    <body>

        <div class="page-content">
            <div class="row">
                <div class="col-md-2">
                    <div class="sidebar content-box" style="display: block;">
                        <ul class="nav">
                            <!-- Main menu -->
                            <li class="text-center">
                                <h4>Acesso Adminstrador</h4>
                            </li>
                            <li class="current">
                                <a><i class="fas fa-unlock-alt"></i>
                                            <?php echo $_SESSION['login']; ?>
                                        </a>

                            </li>
                            <li><a href="Usuario_Sair.php"><i class="glyphicon glyphicon-log-out"></i>Sair</a></li>
                        </ul>
                    </div>

                    <div class="sidebar content-box" style="display: block;">
                        <ul class="nav">

                            <!-- Main menu -->
                            <li class="current"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Início</a></li>
                            <!-- ADM -->
                            <li class="submenu">
                                <a href="#">                                  
                                    Usuário                                  
                            <span class="caret pull-right"></span>
                         </a>
                                <!-- Sub menu -->
                                <ul>
                                    <li><a href="Usuario_Form.php"><i class="icon-inbox"></i>Cadastrar Usuários </a></li>
                                    <li><a href="Usuario_Lista.php"><i class="icon-inbox"></i>Lista de Usuários </a></li>
                                    <li><a href="Usuario_Form_Pesquisa_Nome.php"><i class="icon-inbox"></i>Pesquisar Usuários </a></li>
                                </ul>
                            </li>
                            <!-- Clientes -->
                            <li class="submenu">
                                <a href="#">                                    
                                    Clientes                                    
                            <span class="caret pull-right"></span>
                         </a>
                                <!-- Sub menu -->
                                <ul>
                                    <li><a href="Cliente_Form.php"><i class="icon-inbox"></i>Cadastrar Cliente </a></li>
                                    <li><a href="Cliente_Lista.php">Lista de Clientes</a></li>
                                    <li><a href="Cliente_Form_Pesquisa_Nome.php">Pesquisar Cliente</a></li>
                                </ul>
                            </li>

                            <!-- Categorias -->
                            <li class="submenu">
                                <a href="#">
                                    Categorias
                            <span class="caret pull-right"></span>
                         </a>
                                <!-- Sub menu -->
                                <ul>
                                    <li><a href="Categorias_Form.php"><i class="icon-inbox"></i>Cadastrar Categorias </a></li>
                                    <li><a href="Categorias_Lista.php">Lista de Categorias</a></li>
                                    <li><a href="Categorias_Form_Pesquisa_Nome.php">Pesquisar Categorias</a></li>
                                </ul>
                            </li>

                            <!-- Produtos -->
                            <li class="submenu">
                                <a href="#">
                                    Produtos
                            <span class="caret pull-right"></span>
                         </a>
                                <!-- Sub menu -->
                                <ul>
                                    <li><a href="Produto_Form.php"><i class="icon-inbox"></i>Cadastrar Produtos </a></li>
                                    <li><a href="Produto_Lista.php">Lista de Produtos</a></li>
                                    <li><a href="Produto_Form_Pesquisa_Nome.php">Pesquisar Produtos</a></li>
                                </ul>
                            </li>

                            <!-- outro -->
                            <li class="submenu">
                                <a href="#">
                                    outro
                            <span class="caret pull-right"></span>
                         </a>
                                <!-- Sub menu -->
                                <ul>
                                    <li><a href="form-usuario.php"><i class="icon-inbox"></i>Cadastrar Cliente </a></li>
                                    <li><a href="usuario-lista.php">Lista de Clientes</a></li>
                                    <li><a href="usuario-form-pesquisa-nome.php">Pesquisar Cliente</a></li>
                                </ul>
                            </li>

                            <!-- <li class="current visible-xs"><a href="restrito-sair.php"><i class="glyphicon glyphicon-log-out"></i>Sair</a></li>-->
                        </ul>
                    </div>
                </div>
