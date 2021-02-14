<?php 
$title ="Pesquisa de Cliente"; ?>
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
                                    <h2>Pesquisar Cliente</h2>
                                </center>
                            </div>
                            <br><br>

                            <form class="form-system" method="post" action="Cliente_Pesquisa_Nome.php">

                                <div class="form-group text-center">
                                    <label class="col-sm-2 control-label">Informe o nome:</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="nome" class="form-control" required>
                                    </div>


                                </div>
                                <button type="submit" class="btn btn-warning" name="botao"><i class="fas fa-search"></i></button>
                                <!--<input type="submit" class="btn btn-warning" name="botao" value=""> -->
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

<?php include "includes/footer.php"; ?>
