<?php 
$title =  "Item Venda Form";
require "includes/header.php" ?>

<section class="container-fluid">
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-12">
                <div class="content-box-large">

                    <div class="panel-body">

                        <div class="container theme-showcase" role="main">

                            <div class="page-header">
                                <center>
                                    <h2>Cadastre Item Venda</h2>
                                </center>
                            </div>
                            <br><br>

                            <form class="form-horizontal" method="post" action="ItemVenda_Cadastrar.php" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Data Venda:</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="datavenda" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Prazo:</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="prazo" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Id Pedido:</label>
                                    <div class="col-sm-10">

                                        <select class="basic" name="idpedi" required>
                                            <option></option>
                                            <?php
                                                //PEGA OS DADOS DA TABELA pedido e cliente
                                                include("conexao.php");

                                                $consulta = "SELECT * FROM pedido";
                                                
                                                $con= $conn->query($consulta) or die($conn->error);
                                                

                                                while($dado = $con->fetch_array()){ 
                                                    
                                                    $idclient = $dado["idclien"];
                                                
                                                    $consulta2 = "SELECT cpf FROM cliente where idcliente = $idclient";
                                                    $con2 = $conn->query($consulta2) or die($conn->error);
                                                    while($dado2 = $con2->fetch_array()){ 
                                                ?>
                                                    <option value="<?php echo $dado["idpedido"];?>">> Id: <?php echo $dado["idpedido"];?> > Data: <?php echo $dado["datadopedido"];?> > IdStatusPedido: <?php echo $dado["idstatuspedido"];?> > ClienteCPF: <?php echo $dado2["cpf"];?> </option>
                                                 
                                                <?php } }  ?>                                          
                                        </select>

                                    </div>
                                </div>




                                <input type="hidden" name="iditemvenda" value="<?php echo $row_itemvenda['iditemvenda']; ?>">

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                                        <button type="reset" class="btn btn-warning">Cancelar</button>
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

<?php require "includes/footer.php" ?>
