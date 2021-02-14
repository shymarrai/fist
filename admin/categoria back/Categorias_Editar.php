<?php
	include_once("conexao.php");

	$idcategorias = $_GET['idcategorias'];
	//Buscar os dados referente ao usuario situado neste id
	$result_categorias = "SELECT * FROM categorias WHERE idcategorias = '$idcategorias' LIMIT 1";
	$resultado_categorias= mysqli_query($conn, $result_categorias);
	$row_categorias = mysqli_fetch_assoc($resultado_categorias);	
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
                                        <h2>Editar dados Categoria
                                            <?php echo $idcategorias; ?>
                                        </h2>

                                    </center>
                                </div>
                                <br><br>

                                <form class="form-horizontal" method="POST" action="Categorias_Editar_Processar.php" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nome:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nome" class="form-control" id="inputEmail3" placeholder="Nome Completo" value="<?php echo $row_categorias['nome']; ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Descricao:</label>
                                        <div class="col-sm-10">
                                            <input type="textarea" name="descricao" class="form-control" id="inputEmail3" placeholder="" value="<?php echo $row_categorias['descricao']; ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Marca:</label>
                                        <div class="col-sm-10">
                                            <select class="basic" name="marca" required>
                                                <option style="color:red;"><?php echo $row_categorias['marca']; ?></option>
                                                <option value="mondai">Mondai</option>
                                                <option value="rolex">Rolex</option>
                                                <option value="champion">Champion</option>
                                                <option value="oakley">Oakley</option>
                                                <option value="outro">Outro</option>
                                            </select>
                                        </div>
                                    </div>


                                    <input type="hidden" name="idcategorias" value="<?php echo $row_categorias['idcategorias']; ?>">
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-warning">Alterar</button>
                                            <a type="button" class="btn btn-info" href="Categorias_lista.php">Cancelar</a>
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
