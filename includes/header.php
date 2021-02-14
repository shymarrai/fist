<?php
session_start();
$acesso = (isset($_SESSION['cliente'])?"cliente/index.php":"#myModal");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>
        Fist Gallery
    </title>

    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
	<link href="/css/bootstrap.min.css" rel="stylesheet" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/css/bootstrap.min.css" rel="stylesheet" media="all" />
    <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="fontawesome/fontawesome.min.css" rel="stylesheet" media="all" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css" />
    <!-- botao de ir ao topo -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	 <!-- /botao de ir ao topo -->
	
    <style>
    .window{
    display:none;
    width:300px;
    height:300px;
    position:absolute;
    left:0;
    top:0;
    background:#FFF;
    z-index:9900;
    padding:10px;
    border-radius:10px;
}
 
#mascara{
    display:none;
    position:absolute;
    left:0;
    top:0;
    z-index:9000;
    background-color:#000;
}
 
.fechar{display:block; text-align:right;}
    </style>
</head>


    <div id="modalblur">
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
                    <a class="small-logo" href="/"><img src="img/small_logo.jpg"></a>
                </div>
            </div>
            <div class="navbar-collapse collapse">

                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="/">INICIO</a></li>
                    <li><a href="marcas.php">MARCAS</a></li>
                    
                    
                    <li><a href="catalogo.php">CATÁLOGO</a></li>
                    <li><a href="colecoes.php">COLEÇÕES</a></li>
					
                    <!-- ACESSO cliente-->
                    <li class="visible-xs"><a href="#" data-toggle="modal" data-target="#myModal"><i class="far fa-user fa-2x"></i></a></li>
                    <li class=" hidden-xs" style="margin-left:30px;" title="login"><a href="<?php echo $acesso; ?>"  data-toggle="modal" data-target=" <?php echo $acesso; ?>  "><i class="far fa-user fa-2x"></i></a></li>

                     <!--<p class="navbar-text "><a href="order.php" class="navbar-link"><i class="far fa-envelope fa-2x" style="cursor:pointer; opacity:1px;"></i></a></p>  -->
                    
                  
					<li>
					<a href='order.php'> a</a>
					<i class="fa fa-shopping-cart fa-2x " style="cursor:pointer; opacity:1px;" data-toggle="modal" data-target="#Modal">
					</i>
					<span class="badge badge-notify my-cart-badge"></span>
					
					</li>
					
                </ul>

            </div>
            <!--/.nav-collapse -->
        </div>
    </div>

    <div class="container-fluid big-logo-row">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 big-logo-container">
                    <h1 class="big-logo"><a href="/"><img class="big-logo2" src="img/big_logo.jpg" width="35%" height="auto"></a></h1>
                </div>
                <!--/.col-xs-12 -->
            </div>
            <!--/.row -->
        </div>
        <!--/.container -->
    </div>
	</div>
        
    <?php include "includes/modal_acesso.php"; ?>
