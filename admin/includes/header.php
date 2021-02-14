<?php session_start(); ?>
<?php
   if(!isset($_SESSION['login'])) header("location: login.php");  
?>



    <!DOCTYPE html>
    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
            <?php echo $title; ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- styles -->
        <link href="css/styles.css" rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>


    </head>

    <body>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/script.js" type="text/javascript"></script>
        <script type="text/javascript" language="javascript" charset="utf-8" src="js/nav.js"></script>


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
                                    &nbsp; 
                                    <?php echo $_SESSION['login']; ?>
                                 </a>

                            </li>
                            <li><a href="Usuario_EditarUser.php?$log='.$_SESSION['login'].'"><i class="fas fa-edit"></i> Perfil</a></li>
                            <li><a href="Usuario_Sair.php"><i class="glyphicon glyphicon-log-out"></i> Sair</a></li>
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
                                    <li><a href="Usuario_Form.php"><i class="icon-inbox"></i> <i class="fas fa-plus"></i> &nbsp; Cadastrar Usuários</a></li>
                                    <li><a href="Usuario_Form_Pesquisa_Nome.php"><i class="icon-inbox"></i> <i class="fas fa-search"></i> &nbsp; Listar Usuários</a></li>
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
                                    <li><a href="Cliente_Form.php"><i class="icon-inbox"></i> <i class="fas fa-plus"></i> &nbsp; Cadastrar Cliente</a></li>
                                    <li><a href="Cliente_Form_Pesquisa_Nome.php"><i class="fas fa-search"></i> &nbsp; Pesquisar Cliente</a></li>
                                </ul>
                            </li>

                            <!-- Categorias 
                            <li class="submenu">
                                <a href="#">
                                    Categorias
                            <span class="caret pull-right"></span>
                         </a>
                                <ul>
                                    <li><a href="Categorias_Form.php"><i class="icon-inbox"></i> <i class="fas fa-plus"></i> &nbsp; Cadastrar Categorias</a></li>
                                    <li><a href="Categorias_Form_Pesquisa_Nome.php"> <i class="fas fa-search"></i> &nbsp; Pesquisar Categorias</a></li>
                                </ul>
                            </li>
                            -->

                            <!-- Produtos -->
                            <li class="submenu">
                                <a href="#">
                                    Produtos
                            <span class="caret pull-right"></span>
                         </a>
                                <!-- Sub menu -->
                                <ul>
                                    <li><a href="Produto_Form.php"><i class="icon-inbox"></i> <i class="fas fa-plus"></i> &nbsp; Cadastrar Produtos </a></li>
                                    <li><a href="Produto_Form_Pesquisa_Nome.php"><i class="fas fa-search"></i> &nbsp; Pesquisar Produtos</a></li>
                                </ul>
                            </li>

                            <!-- venda -->
                            <li class="submenu">
                                <a href="#">
                                    Venda
                            <span class="caret pull-right"></span>
                         </a>
                                <!-- Sub menu -->
                                <ul>
                                    <li><a href="Venda_Form.php"><i class="icon-inbox"></i> <i class="fas fa-plus"></i> &nbsp; Cadastrar Venda</a></li>
                                    <li><a href="Venda_Form_Pesquisa_Nome.php"><i class="fas fa-search"></i> &nbsp; Pesquisar Venda</a></li>
                                </ul>
                            </li>

                            <!-- item vendas 
                            <li class="submenu">
                                <a href="#">
                                    Item Venda
                            <span class="caret pull-right"></span>
                         </a>
                                
                                <ul>
                                    <li><a href="Itemvenda_Form.php"><i class="icon-inbox"></i> <i class="fas fa-plus"></i> &nbsp; Cadastrar Item Venda</a></li>
                                    <li><a href="Itemvenda_Form_Pesquisa_Nome.php"><i class="fas fa-search"></i> &nbsp; Pesquisar Item Venda</a></li>
                                </ul>
                            </li>
                            -->

                            <!-- pedido -->
                            <li class="submenu">
                                <a href="#">
                                    Pedido
                            <span class="caret pull-right"></span>
                         </a>
                                <!-- Sub menu -->
                                <ul>
                                    <li><a href="Pedido_Form.php"><i class="icon-inbox"></i> <i class="fas fa-plus"></i> &nbsp; Cadastrar Pedido</a></li>
                                    <li><a href="Pedido_Form_Pesquisa_Nome.php"><i class="fas fa-search"></i> &nbsp; Pesquisar Pedido</a></li>
                                </ul>
                            </li>

                            <!-- item pedido 
                            <li class="submenu">
                                <a href="#">
                                    Item Pedido
                            <span class="caret pull-right"></span>
                         </a>

                                <ul>
                                    <li><a href="ItemPedido_Form.php"><i class="icon-inbox"></i> <i class="fas fa-plus"></i> &nbsp; Cadastrar Item-Pedido</a></li>
                                    <li><a href="ItemPedido_Form_Pesquisa_Nome.php"><i class="fas fa-search"></i> &nbsp; Pesquisar Item-Pedido</a></li>
                                </ul>
                            </li>
                            -->

                            <!-- status pedido -->
                            <li class="submenu">
                                <a href="#">
                                    Status Pedido
                            <span class="caret pull-right"></span>
                         </a>
                                <!-- Sub menu -->
                                <ul>
                                    <li><a href="StatusPedido_Form.php"><i class="icon-inbox"></i> <i class="fas fa-plus"></i> &nbsp; Cadastrar Status-Pedido</a></li>
                                    <li><a href="StatusPedido_Form_Pesquisa_Nome.php"><i class="fas fa-search"></i> &nbsp; Pesquisar Status-Pedido</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
