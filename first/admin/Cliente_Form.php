<?php require "includes/header.php" ?>

<section class="container-fluid">
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-12">
                <div class="content-box-large">

                    <div class="panel-body">

                        <div class="container theme-showcase" role="main">

                            <div class="page-header">
                                <center>
                                    <h2>Cadastre o Cliente</h2>
                                </center>
                            </div>
                            <br><br>

                            <form class="form-horizontal" method="post" action="Cliente_Cadastrar.php" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nome:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nome" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">RG:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="rg" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">CPF:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="cpf" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">E-mail:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="email" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Senha:</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="senha" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Telefone:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="telefone" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">CEP:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="cep" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Endereço:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="endereco" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Cidade:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="cidade" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Estado:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="estado" class="form-control" required>
                                    </div>
                                </div>



                                <input type="hidden" name="idcliente" value="<?php echo $row_usuario['idcliente']; ?>">

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-warning">Cadastrar</button>
                                        <button type="reset" class="btn btn-primary">Cancelar</button>
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
