<?php
    $title ="Produto Editar";
	include_once("conexao.php");

	$idprodutos = $_GET['idprodutos'];
	//Buscar os dados referente ao usuario situado neste id
	$result_produtos = "SELECT * FROM produtos WHERE idprodutos = '$idprodutos' LIMIT 1";
	$resultado_produtos= mysqli_query($conn, $result_produtos);
	$row_produtos = mysqli_fetch_assoc($resultado_produtos);	
    ?>


    <?php include "includes/header.php" ?>


    <section class="container-fluid">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-box-large">
                        <div class="panel-body">
                            <div class="container theme-showcase" role="main">

                                <div class="page-header">
                                    <center>
                                        <h2>Editar dados Produtos
                                            <?php echo $idprodutos; ?>
                                        </h2>

                                    </center>
                                </div>
                                <br><br>

                                <form class="form-horizontal" method="POST" action="Produto_Editar_Processar.php" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nome:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nome" class="form-control" placeholder="Nome Completo" value="<?php echo $row_produtos['nome']; ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Valor:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="valor" class="form-control" placeholder="valor" value="<?php echo $row_produtos['valor']; ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Modelo:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="modelo" class="form-control" placeholder="modelo" value="<?php echo $row_produtos['modelo']; ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Detalhes:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="detalhes" class="form-control" placeholder="detalhes" value="<?php echo $row_produtos['detalhes']; ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Quantidade:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="quantidade" class="form-control" placeholder="quantidade" value="<?php echo $row_produtos['quantidade']; ?>" required>
                                        </div>
                                    </div>

                                    <?php 
                                        $idcat = $row_produtos['categoriasid'];
                                        $consulta2 = "SELECT * FROM categorias WHERE idcategorias = $idcat";
                                                    $con2 = $conn->query($consulta2) or die($conn->error);
                                                    
                                                     while($dados = $con2->fetch_array()){

                                                         ?>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Categoria:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nomecat" class="form-control" placeholder="nomecat" value="<?php echo $dados['nomecat']; ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Marca:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="marca" class="form-control" placeholder="marca" value="<?php echo $dados['marca']; ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Coleção:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="colecao" class="form-control" placeholder="colecao" value="<?php echo $dados['colecao']; ?>" required>
                                        </div>
                                    </div>

                                    <?php                                                                                        }                                                                                  ?>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Imagem 1:</label>
                                        <div class="col-sm-10">
                                            <img src="./img/<?php echo $row_produtos['img1'];?>" width="200px" height="auto" />

                                            <input type="file" name="img1" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Imagem 2:</label>
                                        <div class="col-sm-10">
                                            <img src="./img/<?php echo $row_produtos['img2'];?>" width="200px" height="auto" />

                                            <input type="file" name="img2" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Imagem 3:</label>
                                        <div class="col-sm-10">
                                            <img src="./img/<?php echo $row_produtos['img3'];?>" width="200px" height="auto" />

                                            <input type="file" name="img3" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Imagem 4:</label>
                                        <div class="col-sm-10">
                                            <img src="./img/<?php echo $row_produtos['img4'];?>" width="200px" height="auto" />

                                            <input type="file" name="img4" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Pedido:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="idped" class="form-control" placeholder="pedido" value="<?php echo $row_produtos['idped']; ?>" required>
                                        </div>
                                    </div>


                                    <input type="hidden" name="idprodutos" value="<?php echo $row_produtos['idprodutos']; ?>">
                                    <input type="hidden" name="categoriasid" value="<?php echo $row_produtos['categoriasid']; ?>">


                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Editar dados</button>
                                            <button type="reset" class="btn btn-warning">Limpar</button>
                                            <a type="button" class="btn btn-info" href="Produto_Form_Pesquisa_Nome.php">Cancelar</a>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- div nao fechada no header -->
    </div>

    <?php include "includes/footer.php" ?>
