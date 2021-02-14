<?php 
$title =  "Produto Form";
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
                                    <h2>Cadastre o Produto </h2>
                                </center>
                            </div>
                            <br><br>

                            <form class="form-horizontal" method="post" action="Produto_Cadastrar.php" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nome:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nome" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Valor:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="valor" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">modelo:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="modelo" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Detalhes:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="detalhes" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Quantidade:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="quantidade" class="form-control" required>
                                    </div>
                                </div>
                                <!-- TABELA CATEGORIA -->
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Categoria:</label>
                                    <!-- categoria -->
                                    <div class="col-sm-10">
                                        <input type="text" name="nomecat" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Marca:</label>
                                    <!-- categoria -->
                                    <div class="col-sm-10">
                                        <input type="text" name="marca" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Coleção:</label>
                                    <!-- categoria -->
                                    <div class="col-sm-10">
                                        <input type="text" name="colecao" class="form-control" required>
                                    </div>
                                </div>

                                <!-- //TABELA CATEGORIA -->

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Id Pedido:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="idped" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Imagem 1:</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="img1" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Imagem 2:</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="img2" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Imagem 3:</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="img3" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Imagem 4:</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="img4" class="form-control" required>
                                    </div>
                                </div>



                                <input type="hidden" name="idprodutos" value="<?php echo $row_produtos['idprodutos']; ?>">

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
