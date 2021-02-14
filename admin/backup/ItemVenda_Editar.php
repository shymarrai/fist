<?php
	include_once("conexao.php");

	$iditemvenda = $_GET['iditemvenda'];
	//Buscar os dados referente ao usuario situado neste id
	$result_itemvenda = "SELECT * FROM itemvenda WHERE iditemvenda = '$iditemvenda' LIMIT 1";
	$resultado_itemvenda= mysqli_query($conn, $result_itemvenda);
	$row_itemvenda = mysqli_fetch_assoc($resultado_itemvenda);	
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
                                        <h2>Visualizar / Editar Item Venda:
                                            <?php echo $iditemvenda; ?>
                                        </h2>

                                    </center>
                                </div>
                                <br><br>

                                <form class="form-horizontal" method="POST" action="ItemVenda_Editar_Processar.php" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Data Venda:</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="datavenda" class="form-control" placeholder="" value="<?php echo $row_itemvenda['datavenda']; ?>" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Prazo:</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="prazo" class="form-control" placeholder="" value="<?php echo $row_itemvenda['prazo']; ?>" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Id Pedido:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="idpedi" class="form-control" placeholder="" value="<?php echo $row_itemvenda['idpedi']; ?>" required="required">
                                        </div>
                                    </div>

                                    <input type="hidden" name="iditemvenda" value="<?php echo $row_itemvenda['iditemvenda']; ?>">
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Editar dados</button>
                                            <button type="reset" class="btn btn-warning">Limpar</button>
                                            <a type="button" class="btn btn-info" href="ItemVenda_Form_Pesquisa_Nome.php">Cancelar</a>
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
