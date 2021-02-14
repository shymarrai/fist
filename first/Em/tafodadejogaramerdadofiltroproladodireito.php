<?php
include "includes/header.php";
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">





    <style type="text/css">
	
	
			<!------- Filtro de PEsquisa ----->
           	.behclick-panel  .list-group {
    		margin-bottom: 0px;
		}
		.behclick-panel .list-group-item:first-child {
			border-top-left-radius:0px;
			border-top-right-radius:0px;
		}
		.behclick-panel .list-group-item {
			border-right:0px;
			border-left:0px;
		}
		.behclick-panel .list-group-item:last-child{
			border-bottom-right-radius:0px;
			border-bottom-left-radius:0px;
		}
		.behclick-panel .list-group-item {
			padding: 5px;
		}
		.behclick-panel .panel-heading {
			/* 				padding: 10px 15px;
                            border-bottom: 1px solid transparent; */
			border-top-right-radius: 0px;
			border-top-left-radius: 0px;
			border-bottom: 1px solid darkslategrey;
		}
		.behclick-panel .panel-heading:last-child{
			/* border-bottom: 0px; */
		}
		.behclick-panel {
			border-radius: 0px;
			border-right: 0px;
			border-left: 0px;
			border-bottom: 0px;
			box-shadow: 0 0px 0px rgba(0, 0, 0, 0);
		}
		.behclick-panel .radio, .checkbox {
			margin: 0px;
			padding-left: 10px;
		}
		.behclick-panel .panel-title > a, .panel-title > small, .panel-title > .small, .panel-title > small > a, .panel-title > .small > a {
			outline: none;
		}
		.behclick-panel .panel-body > .panel-heading{
			padding:10px 10px;
		}
		.behclick-panel .panel-body {
			padding: 0px;
		}
		 /* unvisited link */
		.behclick-panel a:link {
		    text-decoration:none;
		}

		/* visited link */
		.behclick-panel a:visited {
		    text-decoration:none;
		}

		/* mouse over link */
		.behclick-panel a:hover {
		    text-decoration:none;
		}

		/* selected link */
		.behclick-panel a:active {
		    text-decoration:none;
		}
		
		.checkbox{
			color:black;
		}
		
		<!---.row{ ---->
			
			margin-right:80%;
			
		}
		
		
		
			<!--------- FIM ----------->
			
			
			.btn-product{
	width: 100%;
}

	.catalogoR{
		float:right;
	}
		

    </style>

	



<section> <!------- Filtro de Pesquisa -------->


		<!----------------- Catalogo -------------->
	
			
			<div class="col-md-8">
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail" >
					<h4 class="text-center"><span class="label label-info">Samsung</span></h4>
					<img src="http://placehold.it/650x450&text=Galaxy S5" class="img-responsive">
					<div class="caption">
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<h3>Galaxy S5</h3>
							</div>
							<div class="col-md-6 col-xs-6 price">
								<h3>
								<label>$649.99</label></h3>
							</div>
						</div>
						<p>32GB, 2GB Ram, 1080HD, 5.1 inches, Android</p>
						<div class="row">
							<div class="col-md-6">
								<a class="btn btn-primary btn-product"><span class="glyphicon glyphicon-thumbs-up"></span> Like</a> 
							</div>
							<div class="col-md-6">
								<a href="#" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></div>
						</div>

						<p> </p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail" >
					<h4 class="text-center"><span class="label label-info">Apple</span></h4>
					<img src="http://placehold.it/650x450&text=iPhone 6" class="img-responsive">
					<div class="caption">
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<h3>iPhone 6</h3>
							</div>
							<div class="col-md-6 col-xs-6 price">
								<h3>
								<label>$749.99</label></h3>
							</div>
						</div>
						<p>32GB, 64Bit, 1080HD, 4.7 inches, iOS 8</p>
						<div class="row">
							<div class="col-md-6">
								<a class="btn btn-primary btn-product"><span class="glyphicon glyphicon-thumbs-up"></span> Like</a> 
							</div>
							<div class="col-md-6">
								<a href="#" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></div>
						</div>

						<p> </p>
					</div>
				</div>
			</div>
            <div class="col-sm-6 col-md-4">
				<div class="thumbnail" >
					<h4 class="text-center"><span class="label label-info">Nokia</span></h4>
					<img src="http://placehold.it/650x450&text=Lumia 1520" class="img-responsive">
					<div class="caption">
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<h3>Lumia 1520</h3>
							</div>
							<div class="col-md-6 col-xs-6 price">
								<h3>
								<label>$749.00</label></h3>
							</div>
						</div>
						<p>32GB, 4GB Ram, 1080HD, 6.3 inches, WP 8</p>
						<div class="row">
							<div class="col-md-6">
								<a class="btn btn-primary btn-product"><span class="glyphicon glyphicon-thumbs-up"></span> Like</a> 
							</div>
							<div class="col-md-6">
								<a href="#" class="btn btn-success btn-product"><span class="glyphicon glyphicon-shopping-cart"></span> Buy</a></div>
						</div>

						<p> </p>
					</div>
				</div>
			</div>
            
        </div> 
		
	
	<!----------------- Fim Catalogo --------------->








     <div class="container-fluid">
    <div class="row">
	
	

	
	
	
	<!------- Filtro de Pesquisa ------------------->
	
	
		<div class="col-xs- col-sm-1 col-lg-3 col-md-3">
			<div id="accordion" class="panel panel-primary behclick-panel">
				<div class="panel-heading">
					<h3 class="panel-title">Filtro</h3>
				</div>
				<div class="panel-body" >
					<div class="panel-heading " >
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#collapse0">
								<i class="indicator fa fa-caret-down" aria-hidden="true"></i> Price
							</a>
						</h4>
					</div>
					
						<!------ Preço ---->
					<div id="collapse0" class="panel-collapse collapse in" > 
						<ul class="list-group">
							<li class="list-group-item">
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										0 - 1000$
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox" >
									<label>
										<input type="checkbox" value="">
										1000$ - 2000$
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox"  >
									<label>
										<input type="checkbox" value="">
										2000$ - 6000$
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox"  >
									<label>
										<input type="checkbox" value="">
										+6000$
									</label>
								</div>
							</li>
						</ul>
					</div>	<!------ Fim Preço --------->

					<div class="panel-heading " >
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#collapse1">
								<i class="indicator fa fa-caret-down" aria-hidden="true"></i> Brand
							</a>
						</h4>
					</div>
					<div id="collapse1" class="panel-collapse collapse in" >
						<ul class="list-group">
							<li class="list-group-item">
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										Armani
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox" >
									<label>
										<input type="checkbox" value="">
										Rolex
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox"  >
									<label>
										<input type="checkbox" value="">
										G-Shock
									</label>
								</div>
							</li>
						</ul>
					</div>
					<div class="panel-heading" >
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#collapse3"><i class="indicator fa fa-caret-down" aria-hidden="true"></i> Estilo</a>
						</h4>
					</div>
					<div id="collapse3" class="panel-collapse collapse in">
						<ul class="list-group">
							<li class="list-group-item">
								<div class="checkbox">
									<label>
										<input type="checkbox" value="">
										Casual
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox" >
									<label>
										<input type="checkbox" value="">
										Esportivo
									</label>
								</div>
							</li>
							<li class="list-group-item">
								<div class="checkbox"  >
									<label>
										<input type="checkbox" value="">
										Executivo
									</label>
								</div>
							</li>
						</ul>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>





	



	 </section>
	 
	
	 
			
		
	 
	 
	
	 
	 
	 
	 
	 <script>
		        function toggleChevron(e) {
		$(e.target)
				.prev('.panel-heading')
				.find("i.indicator")
				.toggleClass('fa-caret-down fa-caret-right');
	}
	$('#accordion').on('hidden.bs.collapse', toggleChevron);
	$('#accordion').on('shown.bs.collapse', toggleChevron);

	 
	 
	 </script>
    

 
 
 
 
 <?php include "includes/footer.php" ?>
