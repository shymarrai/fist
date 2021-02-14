<?php
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
                                            <input type="text" name="nome" class="form-control" id="inputEmail3" placeholder="Nome Completo" value="<?php echo $row_produtos['nome']; ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Valor:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="valor" class="form-control" id="inputEmail3" placeholder="valor" value="<?php echo $row_produtos['valor']; ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Modelo:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="modelo" class="form-control" id="inputEmail3" placeholder="modelo" value="<?php echo $row_produtos['modelo']; ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Detalhes:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="detalhes" class="form-control" id="inputEmail3" placeholder="detalhes" value="<?php echo $row_produtos['detalhes']; ?>" required>
                                        </div>
                                    </div>
                                    <!-- 
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Categoria:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="idcategorias" class="form-control" id="inputEmail3" placeholder="categoria" value="<?php echo $row_produtos['idcategorias']; ?>" required>
                                        </div>
                                    </div>
-->
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Categoria:</label>
                                        <div class="col-sm-10">
                                            <select class="basic" name="idcategorias" required>
                                            <option value="<?php echo $row_produtos['idcategorias']; ?>" style="color:red;">
                                                <?php
                                                    if($row_produtos['idcategorias'] == 1)
                                                         echo "<td> Luxo </td>";
                                                    elseif($row_produtos['idcategorias'] == 2)
                                                         echo "<td> Casual </td>";
                                                     elseif($row_produtos['idcategorias'] == 3)
                                                        echo "<td> Outro </td>";                                                                                                                                                     
                                                ?>                                            
                                            </option>
                                            <option value="1">Luxo</option>
                                            <option value="2">Casual</option>
                                            <option value="3">Outro</option>                                            
                                        </select>

                                        </div>
                                    </div>



                                    <input type="hidden" name="idprodutos" value="<?php echo $row_produtos['idprodutos']; ?>">
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-warning">Alterar</button>
                                            <a type="button" class="btn btn-info" href="Produto_lista.php">Cancelar</a>
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
