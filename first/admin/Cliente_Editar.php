<?php
	include_once("conexao.php");

	$idcliente = $_GET['idcliente'];
	//Buscar os dados referente ao usuario situado neste id
	$result_cliente = "SELECT * FROM cliente WHERE idcliente = '$idcliente' LIMIT 1";
	$resultado_cliente= mysqli_query($conn, $result_cliente);
	$row_cliente = mysqli_fetch_assoc($resultado_cliente);	
?>
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
                                        <h2>Editar dados Cliente
                                            <?php echo $idcliente; ?>
                                        </h2>

                                    </center>
                                </div>
                                <br><br>

                                <form class="form-horizontal" method="POST" action="Cliente_Editar_Processar.php" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nome:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nome" class="form-control" id="inputEmail3" placeholder="Nome Completo" value="<?php echo $row_cliente['nome']; ?>" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">RG:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="rg" class="form-control" id="inputEmail3" placeholder="########-#" value="<?php echo $row_cliente['rg']; ?>" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">CPF:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="cpf" class="form-control" id="inputEmail3" placeholder="#########-##" value="<?php echo $row_cliente['cpf']; ?>" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">E-mail:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="email" class="form-control" id="inputEmail3" placeholder="exemplo@exemplo.com" value="<?php echo $row_cliente['email']; ?>" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Senha:</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="senha" class="form-control" id="inputEmail3" placeholder="******" value="<?php echo $row_cliente['senha']; ?>" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Telefone:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="telefone" class="form-control" id="inputEmail3" placeholder="DDD #####-####" value="<?php echo $row_cliente['telefone']; ?>" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">CEP:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="cep" class="form-control" id="inputEmail3" placeholder="CEP" value="<?php echo $row_cliente['cep']; ?>" required="required">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Endereço:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="endereco" class="form-control" id="inputEmail3" placeholder="Endereco Completo" value="<?php echo $row_cliente['endereco']; ?>" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Cidade:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="cidade" class="form-control" id="inputEmail3" placeholder="Cidade" value="<?php echo $row_cliente['cidade']; ?>" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Estado:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="estado" class="form-control" id="inputEmail3" placeholder="Estado" value="<?php echo $row_cliente['estado']; ?>" required="required">
                                        </div>
                                    </div>


                                    <input type="hidden" name="idcliente" value="<?php echo $row_cliente['idcliente']; ?>">
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-warning">Alterar</button>
                                            <a type="button" class="btn btn-info" href="Usuario_lista.php">Cancelar</a>
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
