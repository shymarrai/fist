<?php
session_start();
require_once "../Config.inc.php";
require_once 'header.php';
require_once "../class/Cliente.class.php";
    $cliente = new Cliente();
    $dados = $cliente->listacliente();
	
?>
<section class='container-fluid' style='margin-top: 80px;'>
</div class='row'>
<div class="col-lg-3 col-xs-4 col-sm-4 col-md-4">
<i class="fas fa-user fa-10x" style='color: black ;margin:5px;padding: 15px'></i>
    <div class="panel-title">
        <p>Bem Vindo,
            <?php echo $_SESSION['cliente']; ?> :)</p></div>
<ul class="nav nav-pills nav-stacked">
<li><a href="?pg=Cliente_Editar.php" class="active" rel="nofollow"><i class="fas fa-user"></i> Perfil </a></li>
<li><a href="?pg=cliente-carrinho.php" class="active" rel="nofollow" ><i class="fas fa-cart-plus"></i> Carrinho </a></li>
<li><a href="?pg=cliente-historico.php" class="active" rel="nofollow"><i class="fas fa-cogs"></i> Histórico </a></li>
<li><a href="?pg=cliente-sair.php" class="active" rel="nofollow"><i class="fas fa-times-circle"></i> Sair </a></li>
</ul>
</div>
<div id='meio'>
<?php
$pg = ( isset( $_GET['pg'] )) ? $_GET['pg'] : null;  
 
if ($pg==''){
    include 'Cliente_Editar.php';
}elseif (file_exists($pg)){
    include $pg;
} else {
    include "404.php";    /*Aqui ele vai chamar a página de erro.. */
}
?>
</div>
</section>

<footer>
<?php 
require_once 'footer.php';
?>
</footer>
