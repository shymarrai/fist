<?php
	include_once("conexao.php");

	$idpedido = $_GET['idpedido'];
	//Buscar os dados referente ao usuario situado neste id
	$result_pedido = "SELECT * FROM pedido WHERE idpedido = '$idpedido' LIMIT 1";
	$resultado_pedido= mysqli_query($conn, $result_pedido);
	$row_pedido = mysqli_fetch_assoc($resultado_pedido);	
?>
    <?php
    $title ="Listar / Editar Pedido";
    include "includes/header.php" ?>


        <section class="container-fluid">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content-box-large">
                            <div class="panel-body">
                                <div class="container theme-showcase" role="main">

                                    <div class="page-header">
                                        <center>

                                            <h2>Visualizar / Editar dados Pedido:
                                                <?php echo $idpedido; ?>
                                            </h2>

                                        </center>
                                    </div>
                                    <br><br>

                                    <form class="form-horizontal" method="POST" action="Pedido_Editar_Processar.php" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Data:</label>
                                            <div class="col-sm-10">
                                                <input type="date" name="datadopedido" class="form-control" placeholder="" value="<?php echo $row_pedido['datadopedido']; ?>" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Status Pedido:</label>
                                            <div class="col-sm-10">

                                                <select class="basic" name="idstatuspedido" required>
                                            <?php
                                                //PEGA OS DADOS DA TABELA CATEGORIAS
                                                 $idpedi = $row_pedido['idstatuspedido'];
                                                $consulta = "SELECT * FROM statuspedido WHERE $idpedi = idstatuspedido";
                                                $con = $conn->query($consulta) or die($conn->error);

                                                while($dado = $con->fetch_array()){ ?>
                                                    
                                                
                                                <option style="color:red;" value="<?php echo $row_pedido['idstatuspedido'];?>">> <?php echo $dado["idstatuspedido"];?> > <?php echo $dado["descricaostatus"];?> > <?php echo $dado["datavalida"];?></option>
                                                
                                                <?php } ?>    
                                                                                              
                                            <?php
                                                //PEGA OS DADOS DA TABELA CATEGORIAS

                                                $consulta = "SELECT * FROM statuspedido";
                                                $con = $conn->query($consulta) or die($conn->error);

                                                while($dado = $con->fetch_array()){ ?>

                                                    <option value="<?php echo $dado["idstatuspedido"];?>">> <?php echo $dado["idstatuspedido"];?> > <?php echo $dado["descricaostatus"];?> > <?php echo $dado["datavalida"];?></option>
                                                
                                                <?php } ?>                                          
                                        </select>

                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Cliente:</label>
                                            <div class="col-sm-10">

                                                <select class="basic" name="idclien" required>
                                             <?php
                                                //PEGA OS DADOS DA TABELA CATEGORIAS
                                                 $idcli = $row_pedido['idclien'];
                                                $consulta = "SELECT idcliente, nome, cpf FROM cliente WHERE $idcli = idcliente";
                                                $con = $conn->query($consulta) or die($conn->error);

                                                while($dado = $con->fetch_array()){ ?>
                                                                                                    
                                                <option style="color:red;" value="<?php echo $row_pedido['idclien'];?>">> <?php echo $dado["idcliente"];?> > <?php echo $dado["nome"];?> > <?php echo $dado["cpf"];?></option>
                                                                                                                                                
                                                <?php } ?>  
                                                
                                                
                                            <?php
                                                //PEGA OS DADOS DA TABELA CATEGORIAS

                                                $consulta = "SELECT idcliente, nome, cpf FROM cliente";
                                                $con = $conn->query($consulta) or die($conn->error);

                                                while($dado = $con->fetch_array()){ ?>

                                                    <option value="<?php echo $dado["idcliente"];?>">> <?php echo $dado["idcliente"];?> > <?php echo $dado["nome"];?> > <?php echo $dado["cpf"];?></option>
                                                
                                                <?php } ?>                                          
                                        </select>

                                            </div>
                                        </div>




                                        <input type="hidden" name="idpedido" value="<?php echo $row_pedido['idpedido']; ?>">
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Editar dados</button>
                                                <button type="reset" class="btn btn-warning">Limpar</button>
                                                <a type="button" class="btn btn-info" href="Pedido_Form_Pesquisa_Nome.php">Cancelar</a>
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
