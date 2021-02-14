<?php 
$title =  "Pedido Form";
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
                                    <h2>Cadastre o Pedido</h2>
                                </center>
                            </div>
                            <br><br>

                            <form class="form-horizontal" method="post" action="Pedido_Cadastrar.php" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Data:</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="datadopedido" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Status Pedido:</label>
                                    <div class="col-sm-10">

                                        <select class="basic" name="idstatuspedido" required>
                                            <option></option>
                                            <?php
                                                //PEGA OS DADOS DA TABELA CATEGORIAS
                                                include("conexao.php");

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
                                            <option></option>
                                            <?php
                                                //PEGA OS DADOS DA TABELA CATEGORIAS
                                                include("conexao.php");

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
