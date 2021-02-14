<?php
include "includes/header.php";
?>

<style type="text/css">
       body{
	background: #000;
}
.cover-card {
	border: 2px solid white;
	background: silver;
	padding: 0px;
	margin: 0px;
	height:200px;
}
.cover-card > p {
	text-align: center;
	line-height: 200px;
	background-color: rgba(6,6,6,0.0);
	color: rgba(6,6,6,0.0);
	width: 100%;
	height: 100%;
	font-family: "Lucida Console";
	font-size: 40px;
}
.cover-card:hover > p {
	background-color: rgba(6,6,6,0.3);
	color: white;
	text-shadow: 3px 3px 10px #000;
	}
	

</style>


<div class="row">
<div class="col-lg-12 col-sm-12 col-xs-12">
<section id="colecoes">
<div id="modalblur">
<div class="container-fluid">
    <div class="row text-center">
        <br><h1>Coleções Fist</h1><br><br>
    </div>


            <a href="" data-toggle="modal" data-target="#modalverao" style="display:block;">
		<div class="cover-card col-sm-4" style="background: url(img/colecao/verao.jpg) no-repeat center top;background-size:cover;">
			<p>
				SUMMER COLLECTION
			</p>
		</div>
            </a>
            <a href="" data-toggle="modal" data-target="#modalprimavera" style="display:block;">
		<div class="cover-card col-sm-8" style="background: url(img/colecao/primavera.jpg) no-repeat center top;background-size:cover;">
			<p>
				SPRING COLLECTION
			</p>
		</div>
            </a>
            <a href="" data-toggle="modal" data-target="#modaloutono" style="display:block;">
		<div class="cover-card col-sm-3" style="background: url(img/colecao/outono.jpg) no-repeat center top;background-size:cover;">
			<p>
				AUTUMN COLLECTION
			</p>
		</div>
                </a>
                <a href="" data-toggle="modal" data-target="#modalinverno" style="display:block;">
		<div class="cover-card col-sm-3" style="background: url(img/colecao/inverno.jpg) no-repeat center top;background-size:cover;">
			<p>
				WINTER COLLECTION
			</p>
		</div>
            </a>
            <a href="" data-toggle="modal" data-target="#modalautomatico" style="display:block;">
		<div class="cover-card col-sm-3" style="background: url(img/colecao/automatico.jpg) no-repeat center top;background-size:cover;">
			<p>
				AUTOMATIC EDITION
			</p>
		</div>
            </a>
            <a href="" data-toggle="modal" data-target="#modalesportivo" style="display:block;">
		<div class="cover-card col-sm-3" style="background: url(img/colecao/sport.jpg) no-repeat center top;background-size:cover;">
			<p>
				ESPORTIVOS
			</p>
		</div>
            </a>
            <a href="" data-toggle="modal" data-target="#modalcomemorativo" style="display:block;">
		<div class="cover-card col-sm-4" style="background: url(img/colecao/valentine.jpg) no-repeat center top;background-size:cover;">
			<p>
				COMEMORATIVOS
		</div>
            </a>
            <a href="" data-toggle="modal" data-target="#modalsmart" style="display:block;">
		<div class="cover-card col-sm-4" style="background: url(img/colecao/smartwatch.jpg) no-repeat center top;background-size:cover;">
			<p>
				SMARTWATCH
			</p>
		</div>
            </a>
            <a href="" data-toggle="modal" data-target="#modalexecutivo" style="display:block;">
		<div class="cover-card col-sm-4" style="background: url(img/colecao/executivo.jpg) no-repeat center top;background-size:cover;">
			<p>
				EXECUTIVOS
			</p>
		</div>
            </a>
            <a href="" data-toggle="modal" data-target="#modalwaterproof" style="display:block;">
		<div class="cover-card col-sm-6" style="background: url(img/colecao/waterproof.jpg) no-repeat center top;background-size:cover;">
			<p>
				WATERPROOF
			</p>
		</div>
            </a>
            <a href="" data-toggle="modal" data-target="#modalkids" style="display:block;">
		<div class="cover-card col-sm-6" style="background: url(img/colecao/kids.jpg) no-repeat center top;background-size:cover;">
			<p>
				PARA ELES
			</p>
		</div>
            </a>
	</div>
</div>
</section>
</div>
</div>
    <?php include "includes/colecoes/modalcolstyle.php" ?>
    <?php include "includes/modal_colecoes.php" ?>
    

    <?php include "includes/footer.php" ?>
