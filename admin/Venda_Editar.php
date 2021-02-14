<?php
    $title ="Editar Venda";
	include_once("conexao.php");

	$idvenda = $_GET['idvenda'];
	//Buscar os dados referente ao usuario situado neste id
	$result_venda = "SELECT * FROM venda WHERE idvenda = '$idvenda' LIMIT 1";
	$resultado_venda= mysqli_query($conn, $result_venda);
	$row_venda = mysqli_fetch_assoc($resultado_venda);	
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
                                        <h2>Visualizar / Editar Venda:
                                            <?php echo $idvenda; ?>
                                        </h2>

                                    </center>
                                </div>
                                <br><br>

                                <form class="form-horizontal" method="POST" action="Venda_Editar_Processar.php" enctype="multipart/form-data">

                                    <!--
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Total:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="totvenda" class="form-control" value="<?php// echo $row_venda['totvenda']; ?>" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Frete:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="frete" class="form-control" value="<?php// echo $row_venda['frete']; ?>" required="required">
                                        </div>
                                    </div>
                                    -->

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Id Cliente:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="idcli" class="form-control" value="<?php echo $row_venda['idcli']; ?>" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Id Usuario</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="idu" class="form-control" value="<?php echo $row_venda['idu']; ?>" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Id Pedido:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="pedidoid" class="form-control" value="<?php echo $row_venda['pedidoid']; ?>" required="required">
                                        </div>
                                    </div>

                                    <input type="hidden" name="idvenda" value="<?php echo $row_venda['idvenda']; ?>">
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Editar dados</button>
                                            <button type="reset" class="btn btn-warning">Limpar</button>
                                            <a type="button" class="btn btn-info" href="Venda_Form_Pesquisa_Nome.php">Cancelar</a>
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
