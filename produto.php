<?php
include "includes/header.php";
?>
<?php include "includes/produtostyle.php" ?>
<?php

$idprodutos = $_GET['idprodutos']; 
$conn = mysqli_connect("localhost",'root','','fist');

$sql = mysqli_query($conn,"SELECT * FROM produtos WHERE idprodutos = '$idprodutos'");

$row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
$nome = $row['nome'];
$valor = $row['valor'];
$modelo = $row['modelo'];
$detalhes = $row['detalhes'];
$categoria = $row['idcategorias'];
$img1 = $row['img1'];
$img2 = $row['img2'];
$img3 = $row['img3'];
$img4 = $row['img4'];

?>
<body>
<div id="modalblur">
<div class="page-container row">
	<div class="hero-image" style= "background: url(admin/img/<?php echo $img1;?>) no-repeat center center";></div>
	<div class="wrapper">
		<div class="inner">
			<div class="imageView">
				<div class="imgzoom"><img id="zoom" src="admin/img/<?php echo $img2;?>"/>
				</div>
      		</div>
				<span>Segure para Visualizar os detalhes</span>
    	</div>
		
    		<div class="description">
     			<div class="content">
        			<span class="product-name"><?php echo $nome; ?></span>
        			<h1><?php echo $nome; ?></h1>
        			<p>
         			 <?php echo $detalhes; ?>
					</p>
       					 <div class="price">
       					   <h2>R$: <?php echo $valor; ?></h2>
						</div>
							<div class="basket-btn">
								<span>ADICIONAR AO CARRINHO</span>
						</div>
  				</div>
			</div>
		<div class="row">
			<div id="inside" class="col-lg-12 col-xs-12">
				<div class="strip"> 
					<div id="l-descricao" class="col-lg-6 col-sm-6 col-xs-12">
						<div id="l-titulodesc">
							<h3>Aço Inoxidável 904L</h3>
						</div>
						<div id="imgdesc">
							<img id="img-left" src="admin/img/<?php echo $img3;?>">
						</div>
						<div id="textodesc">
							<p>
							<?php echo $detalhes; ?>
							</p>
						</div>
					</div>
					<div id="r-descricao" class="col-lg-6 col-sm-6 col-xs-12">
						<div id="r-titulodesc">
							<h3>Indicador Branco</h3>
						</div>
						<div id="imgdesc">
							<img id="img-right" src="admin/img/<?php echo $img4;?>"/>
						</div>
						<div id="titulodesc">
							<p>
							<?php echo $detalhes; ?>
						</p>
					</div>
					</div>
				</div>
				<div class="row">
					<div class="feature-image col-lg-12 col-xs-12 col-sm-12" style= "background: url(admin/img/<?php echo $img1;?>) no-repeat center center";> </div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</body>
	<?php include "includes/produtoscript.php" ?>
	<?php include "includes/footer.php" ?>