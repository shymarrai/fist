
<?php require_once '../Config.inc.php'; 

?>
<script>
if(window.location.href == 'cliente-sair.class.php')
{
    window.location.href="../index.php";
}
</script>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>
        Fist Gallery
    </title>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="../fontawesome/fontawesome.min.css" rel="stylesheet" media="all" />
    <script type="text/javascript" src="js/script.js"></script>
    <link rel="stylesheet" type="text/css"​ href="css/style.css">
      <style>


</style>
<script>
	$(document).ready(function() {
    $("div.bhoechie-tab-menu>ul.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
</script>


</head>

<body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid navnav">
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
                </ul>

            </div>
            <!--/.nav-collapse -->
        </div>
    </div>

    <!--/.container-fluid -->
<script>
function ExecutaAcao(valor){
   document.getElementById('form').action = valor + '.php'; 
   document.getElementById('form').submit();
}

var i = setInterval(function () {
    
    clearInterval(i);
  
    // O código desejado é apenas isto:
    document.getElementById("loading").style.display = "none";
	document.getElementById("mid").style.display = "inline";
	
	 document.getElementById("load").style.display = "none";
	document.getElementById("cli").style.display = "inline";
	
	document.getElementById("lod").style.display = "inline";
	document.getElementById("sair").style.display = "inline";
}, 2000);


</script>