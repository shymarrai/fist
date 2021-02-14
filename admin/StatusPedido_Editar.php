<?php
    $title ="Status Pedido";
	include_once("conexao.php");

	$idstatuspedido = $_GET['idstatuspedido'];
	//Buscar os dados referente ao usuario situado neste id
	$result_statuspedido = "SELECT * FROM statuspedido WHERE idstatuspedido = '$idstatuspedido' LIMIT 1";
	$resultado_statuspedido= mysqli_query($conn, $result_statuspedido);
	$row_statuspedido = mysqli_fetch_assoc($resultado_statuspedido);	
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
                                        <h2>Visualizar / Editar dados Status Pedido:
                                            <?php echo $idstatuspedido; ?>
                                        </h2>

                                    </center>
                                </div>
                                <br><br>

                                <form class="form-horizontal" method="POST" action="StatusPedido_Editar_Processar.php" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Descricao:</label>
                                        <div class="col-sm-10">
                                            <!--<input type="text" name="descricaostatus" class="form-control" placeholder="Nome Completo" value="<?php// echo $row_statuspedido['descricaostatus']; ?>" required> -->

                                            <select class="basic" name="descricaostatus" required>

                                                <option style="color:red;" value="<?php echo $row_statuspedido['descricaostatus']; ?>"><?php echo $row_statuspedido['descricaostatus']; ?></option>                                                        
                                            <option value="Pago"> Pago </option>                                       
                                            <option value="Cancelado"> Cancelado </option>
                                            <option value="Outro"> Outro </option>                                                                                    
                                            </select>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Data Valida:</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="datavalida" class="form-control" placeholder="DD/MM/AA" value="<?php echo $row_statuspedido['datavalida']; ?>" required>
                                        </div>
                                    </div>


                                    <input type="hidden" name="idstatuspedido" value="<?php echo $row_statuspedido['idstatuspedido']; ?>">
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Editar dados</button>
                                            <button type="reset" class="btn btn-warning">Limpar</button>
                                            <a type="button" class="btn btn-info" href="StatusPedido_Form_Pesquisa_Nome.php">Cancelar</a>
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
