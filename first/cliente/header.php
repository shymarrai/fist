<?php require_once '../Config.inc.php'; 

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>
        Fist Gallery
    </title>

    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../css/bootstrap.min.css" rel="stylesheet" media="all" />

    <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <link href="/fontawesome/fontawesome.min.css" rel="stylesheet" media="all" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css" />
    <!-- botao de ir ao topo -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <!-- /botao de ir ao topo -->

</head>

<body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="small-logo-container">
                    <a class="small-logo" href="/"><img src="../img/small_logo.jpg"></a>
                </div>
            </div>
            <div class="navbar-collapse collapse">

                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="/">INICIO</a></li>
                    <li><a href="../marcas.php">MARCAS</a></li>
                    <li><a href="../modelos.php">MODELOS</a></li>
                    <li><a href="../estilos.php">ESTILOS</a></li>
                    <li><a href="../catalogo.php">CATÁLOGO</a></li>
                    <li><a href="../colecoes.php">COLEÇÕES</a></li>
                    <!-- ACESSO cliente-->
                    <li class="visible-xs"><a href="#"><i class="far fa-user fa-2x"></i></a></li>
                    <li class=" hidden-xs" style="margin-left:30px;" title="login"><a href=<?php (isset($_SESSION['cliente'])?'cliente/index.php':'acesso.php')?>><i class="far fa-user fa-2x"></i></a></li>

                    <!-- Carrinho -->
                    <li class=""><a href="#"><i class="fas fa-shopping-cart fa-2x"></i></a></li>
                </ul>

            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
	<script src="jquery-1.10.2.js"></script>

    <!--/.container-fluid -->
