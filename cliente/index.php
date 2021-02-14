<?php
session_start();
require_once "../Config.inc.php";
require_once 'header.php';
include "../class/Cliente.Class.php";
    $cliente = new Cliente();
    $info = $cliente->listacliente($_SESSION['cliente']);
?>
<div id="loading" style="display: block">
	<div id="loading">
     	<ul class="bokeh">
        	<li></li>
        	<li></li>
         	<li></li>
        </ul>
	</div>
</div>
<body style="background-color: #f4f0eb ;">
<div id="fullscreen_bg" class="fullscreen_bg"/>	
<div id="modalblur">
<div class="tudomenuuser">
<div class="container">
    <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 bhoechie-tab-container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 bhoechie-tab-menu">
              <ul class="list-group">
                <a href="#" class="list-group-item active">
                  <br/><br/><i class="glyphicon glyphicon-home"></i> Inicio<br/><br/>
                  </a>
                <a href="#" class="list-group-item ">
                  <br/><br/><div class="notification"><span>5</span></div><i class="glyphicon glyphicon-shopping-cart"></i> Carrinho<br/><br/>
                </a>  
                <a href="#" class="list-group-item ">
                  <br/><br/><i class="fas fa-history"></i> Histórico de Compras<br/><br/>
                </a>
                <a href="#" class="list-group-item">
                  <br/><br/><h4 class="glyphicon glyphicon-wrench"></h4> Editar Informações<br/><br/>
                </a>
              </ul>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                    <center>
                      <h1 class="glyphicon glyphicon-user" style="font-size:14em;color:#00001a"></h1>
                      <h2 style="margin-top: 0;color:#00001a">Bem-Vindo(a)</h2>
                      <h3> <span class='nome'><?php echo $info[0]['nome'];?></span></h3>
					  <div id="botao-sair-user">
					  <h2 style="margin-top: 0;color:#00001a"><a href="?pg=cliente-sair.class.php" id="btn-info-user" class="btn btn-sm btn-primary btn-block" role="button">Encerrar Sessão</a></h2>
					  </div>
                    </center>
                </div>
              
              
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-shopping-cart" style="font-size:12em;color:#00001a"></h1>
                      <h2 style="margin-top: 0;color:#00001a"><a href="" data-toggle="modal" data-target="#modal_cart_user" id="btn-info-user" class="btn btn-sm btn-primary btn-block" role="button">Abrir Carrinho</a></h2>
                      <h3 style="margin-top: 0;color:#00001a">Meu Carrinho</h3>
                    </center>
                </div>
    
               
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="fas fa-history" style="font-size:12em;color:#00001a"></h1>
                      <h2 style="margin-top: 0;color:#00001a"><a href="" data-toggle="modal" data-target="#modal_hist_user" id="btn-info-user" class="btn btn-sm btn-primary btn-block" role="button">Abrir Histórico</a></h2>
                      <h3 style="margin-top: 0;color:#00001a">Meu Histórico</h3>
                    </center>
                </div>
                
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-edit" style="font-size:12em;color:#00001a"></h1>
                      <h2 style="margin-top: 0;color:#00001a"><a href="" data-toggle="modal" data-target="#modal_edit_user" id="btn-info-user" class="btn btn-sm btn-primary btn-block" role="button">Editar Informações</a></h2>
                      <h3 style="margin-top: 0;color:#00001a">Minhas Informações</h3>
                    </center>
                </div>
            </div>
        </div>
  </div>
</div>

<div class='col-lg-7 col-xs-9 col-sm-6 col-md-7 ' id="mid" style="display: none" >
<?php
$pg = ( isset( $_GET['pg'] )) ? $_GET['pg'] : null;  
	
if ($pg==''){
   include 'intro.php';
}elseif (file_exists($pg)){
    include $pg;
} else {
    include "404.php";
}
?>
</div>

</div>
</div>
</body>
<?php include ("modal_edit_user.php");?>
<?php include ("modal_cart_user.php");?>
<footer >
<?php 
require_once 'footer.php';
?>
</footer>


