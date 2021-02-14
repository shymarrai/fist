<?php 
$title =  "Venda Form";
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
                                    <h2>Cadastre a Venda</h2>
                                </center>
                            </div>
                            <br><br>

                            <form class="form-horizontal" method="post" action="Venda_Cadastrar.php" enctype="multipart/form-data">

                                <!-- <div class="form-group">
                                    <label class="col-sm-2 control-label">Total:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="totvenda" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Frete:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="frete" class="form-control" required>
                                    </div>
                                </div>-->

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Id Cliente:</label>
                                    <div class="col-sm-10">

                                        <select class="basic" name="idcli" required>
                                            <option></option>
                                            <?php
                                                //PEGA OS DADOS DA TABELA CATEGORIAS
                                                include("conexao.php");

                                                $consulta = "SELECT * FROM cliente";
                                                $con = $conn->query($consulta) or die($conn->error);

                                                while($dado = $con->fetch_array()){ ?>

                                                    <option value="<?php echo $dado["idcliente"];?>">> IdClien: <?php echo $dado["idcliente"];?> > Nome: <?php echo $dado["nome"];?> > CPF: <?php echo $dado["cpf"];?></option>
                                                
                                                <?php } ?>                                          
                                        </select>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Id Usuario:</label>
                                    <div class="col-sm-10">

                                        <select class="basic" name="idu" required>
                                            <option></option>
                                            <?php
                                                //PEGA OS DADOS DA TABELA CATEGORIAS
                                                include("conexao.php");

                                                $consulta = "SELECT * FROM usuario";
                                                $con = $conn->query($consulta) or die($conn->error);

                                                while($dado = $con->fetch_array()){ ?>

                                                    <option value="<?php echo $dado["idusuario"];?>">> IdUsu: <?php echo $dado["idusuario"];?> > Nome: <?php echo $dado["nome"];?> > CPF: <?php echo $dado["cpf"];?></option>
                                                
                                                <?php } ?>                                          
                                        </select>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Id Pedido:</label>
                                    <div class="col-sm-10">

                                        <select class="basic" name="pedidoid" required>
                                            <option></option>
                                            <?php
                                                //PEGA OS DADOS DA TABELA CATEGORIAS
                                                include("conexao.php");

                                                $consulta = "SELECT * FROM pedido";
                                                $con = $conn->query($consulta) or die($conn->error);

                                                while($dado = $con->fetch_array()){ ?>

                                                    <option value="<?php echo $dado["idpedido"];?>">> IdPed: <?php echo $dado["idpedido"];?> > Data: <?php echo $dado["datadopedido"];?> > IdStatusPed: <?php echo $dado["idstatuspedido"];?> > IdClien: <?php echo $dado["idclien"];?></option>
                                                
                                                <?php } ?>                                          
                                        </select>

                                    </div>
                                </div>


                                <input type="hidden" name="idusuario" value="<?php echo $row_venda['idvenda']; ?>">

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
