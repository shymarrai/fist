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
                                        <label class="col-sm-2 control-label">Categoria:</label>
                                        <div class="col-sm-10">
                                            <select class="basic" name="idcategorias" required>
                                                
                                                <option value="<?php echo $idcat = $row_produtos['idcategorias']; ?>" style="color:red;">
                                                
                                                <?php
                                                    /*-------- Pega a categoria relacionada ao que o produto esta vinculada -------*/                                                     
                                                    $consulta2 = "SELECT nome FROM categorias WHERE idcategorias = $idcat";
                                                    $con2 = $conn->query($consulta2) or die($conn->error);
                                                    
                                                     while($dados = $con2->fetch_array()){

                                                        echo $dados["nome"];                                                
                                             }                                                                                                                                                     
                                                ?>                                            
                                            </option>
                                                <option></option>
                                                
                                         <!-- ///////////// mostra as categorias disponiveis /////////////////// -->                                         
                                                <?php
                                                //PEGA OS DADOS DA TABELA CATEGORIAS
                                                include("conexao.php");

                                                $consulta = "SELECT idcategorias, nome FROM categorias";
                                                $con = $conn->query($consulta) or die($conn->error);

                                                while($dado = $con->fetch_array()){ ?>

                                                <option value="<?php echo $dado["idcategorias"];?>">> <?php echo $dado["nome"];?> </option>
                                                
                                            <?php } ?>                                             
                                        </select>

                                        </div>
                                    </div>



                                    <input type="hidden" name="idprodutos" value="<?php echo $row_produtos['idprodutos']; ?>">
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
