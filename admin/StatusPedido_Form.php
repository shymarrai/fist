<?php 
$title =  "Status Pedido Form";
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
                                    <h2>Cadastre o Status Pedido</h2>
                                </center>
                            </div>
                            <br><br>

                            <form class="form-horizontal" method="post" action="StatusPedido_Cadastrar.php" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">DESCRICAO:</label>

                                    <div class="col-sm-10">
                                        <!-- <input type="text" name="descricaostatus" class="form-control" required> -->
                                        <select class="basic" name="descricaostatus" required>
                                            
                                            <option></option>                                                        
                                            <option value="Pago"> Pago </option>                                       
                                            <option value="Cancelado"> Cancelado </option>
                                            <option value="Outro"> Outro </option>                                                                                   
                                        </select>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">DATA VALIDA:</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="datavalida" class="form-control" required>
                                    </div>
                                </div>


                                <input type="hidden" name="idstatuspedido" value="<?php echo $row_statuspedido['idstatuspedido']; ?>">

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
