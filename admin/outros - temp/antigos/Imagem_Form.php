<?php 
$title =  "Imagem Form";
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
                                    <h2>Cadastre Imagens do produto</h2>
                                </center>
                            </div>
                            <br><br>

                            <form class="form-horizontal" method="post" action="Imagem_Cadastrar.php" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Imagem:</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="img" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Id Produtos:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="idprodutos" class="form-control" required>
                                    </div>
                                </div>


                                <input type="hidden" name="idimagem" value="<?php echo $row_imagem['idimagem']; ?>">

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
