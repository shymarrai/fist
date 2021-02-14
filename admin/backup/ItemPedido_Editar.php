<?php
	include_once("conexao.php");

	$iditempedido = $_GET['iditempedido'];
	//Buscar os dados referente ao usuario situado neste id
	$result_itempedido = "SELECT * FROM itempedido WHERE iditempedido = '$iditempedido' LIMIT 1";
	$resultado_itempedido= mysqli_query($conn, $result_itempedido);
	$row_itempedido = mysqli_fetch_assoc($resultado_itempedido);	
?>
    <?php 
        $title =  "Item Pedido Editar";
        include "includes/header.php" 
    ?>


    <section class="container-fluid">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-box-large">
                        <div class="panel-body">
                            <div class="container theme-showcase" role="main">

                                <div class="page-header">
                                    <center>
                                        <h2>Visualizar / Editar dados Item Pedido:
                                            <?php echo $iditempedido; ?>
                                        </h2>

                                    </center>
                                </div>
                                <br><br>

                                <form class="form-horizontal" method="POST" action="ItemPedido_Editar_Processar.php" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Quantidade:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="qtd" class="form-control" placeholder="Quantidade" value="<?php echo $row_itempedido['qtd']; ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Valor:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="valor" class="form-control" placeholder="Valor" value="<?php echo $row_itempedido['valor']; ?>" required>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Pedido:</label>
                                        <div class="col-sm-10">

                                            <select class="basic" name="idpedi" required>

                                                
                                             <?php
                                                //PEGA OS DADOS DA TABELA pedido e cliente relacionado ao cadastro
                                                include("conexao.php");

                                                $idpedid = $row_itempedido["idpedi"];
                                                $consulta = "SELECT * FROM pedido WHERE idpedido = $idpedid";
                                                
                                                $con= $conn->query($consulta) or die($conn->error);
                                                

                                                while($dado = $con->fetch_array()){ 
                                                    
                                                    $idclient = $dado["idclien"];
                                                
                                                    $consulta2 = "SELECT cpf FROM cliente where idcliente = $idclient";
                                                    $con2 = $conn->query($consulta2) or die($conn->error);
                                                    while($dado2 = $con2->fetch_array()){ 
                                                ?>
                                                    
                                            <option style="color:red;" value="<?php echo $row_itempedido['idpedi']; ?>">> Id: <?php echo $dado["idpedido"];?> > Data: <?php echo $dado["datadopedido"];?> > IdPedido: <?php echo $dado["idstatuspedido"];?> > ClienteCPF: <?php echo $dado2["cpf"];?> </option>
                                                 
                                                <?php } }  ?>     
                                            
                                            <?php
                                                //PEGA OS DADOS DA TABELA pedido e cliente                                            

                                                $consulta = "SELECT * FROM pedido";
                                                
                                                $con= $conn->query($consulta) or die($conn->error);
                                                

                                                while($dado = $con->fetch_array()){ 
                                                    
                                                    $idclient = $dado["idclien"];
                                                
                                                    $consulta2 = "SELECT cpf FROM cliente where idcliente = $idclient";
                                                    $con2 = $conn->query($consulta2) or die($conn->error);
                                                    while($dado2 = $con2->fetch_array()){ 
                                                ?>
                                                    
                                            <option value="<?php echo $dado["idpedido"]; ?>">> Id: <?php echo $dado["idpedido"];?> > Data: <?php echo $dado["datadopedido"];?> > IdPedido: <?php echo $dado["idstatuspedido"];?> > ClienteCPF: <?php echo $dado2["cpf"];?> </option>
                                                 
                                                <?php } }  ?>                                          
                                        </select>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Produto:</label>
                                        <div class="col-sm-10">

                                            <select class="basic" name="idprod" required>                                            
                                           
                                                 <?php
                                                //PEGA OS DADOS DA TABELA produtos relacionada ao cadastro
                                                //include("conexao.php");
                                                $idprodi = $row_itempedido['idprod'];
                                                $consulta = "SELECT idprodutos, nome, valor FROM produtos WHERE idprodutos = $idprodi";
                                                
                                                $con= $conn->query($consulta) or die($conn->error);

                                                while($dado = $con->fetch_array()){                                                                                                         
                                                ?>                                            
                                                    <option style="color:red;" value="<?php echo $row_itempedido['idprod'];?>">> Id: <?php echo $dado["idprodutos"];?> > Nome: <?php echo $dado["nome"];?> > Valor: <?php echo $dado["valor"];?> </option>
                                                 
                                                <?php } ?>
                                                
                                                
                                                <?php
                                                //PEGA OS DADOS DA TABELA produtos
                                                //include("conexao.php");

                                                $consulta = "SELECT idprodutos, nome, valor FROM produtos";
                                                
                                                $con= $conn->query($consulta) or die($conn->error);

                                                while($dado = $con->fetch_array()){                                                                                                         
                                                ?>                                            
                                                    <option value="<?php echo $dado["idprodutos"];?>">> Id: <?php echo $dado["idprodutos"];?> > Nome: <?php echo $dado["nome"];?> > Valor: <?php echo $dado["valor"];?> </option>
                                                 
                                                <?php } ?>                                          
                                        </select>

                                        </div>
                                    </div>

                                    <input type="hidden" name="iditempedido" value="<?php echo $row_itempedido['iditempedido']; ?>">
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Editar dados</button>
                                            <button type="reset" class="btn btn-warning">Limpar</button>
                                            <a type="button" class="btn btn-info" href="ItemPedido_Form_Pesquisa_Nome.php">Cancelar</a>
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
