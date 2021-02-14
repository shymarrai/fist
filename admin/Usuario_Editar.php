<?php
    $title = "Usuario Editar";
	include_once("conexao.php");

	$idusuario = $_GET['idusuario'];
	//Buscar os dados referente ao usuario situado neste id
	$result_usuario = "SELECT * FROM usuario WHERE idusuario = '$idusuario' LIMIT 1";
	$resultado_usuario= mysqli_query($conn, $result_usuario);
	$row_usuario = mysqli_fetch_assoc($resultado_usuario);	
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
                                        <h2>Visualizar / Editar dados Usuário:
                                            <?php echo $idusuario; ?>
                                        </h2>

                                    </center>
                                </div>
                                <br><br>

                                <form class="form-horizontal" method="POST" action="Usuario_Editar_Processar.php" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nome:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nome" class="form-control" placeholder="Nome Completo" value="<?php echo $row_usuario['nome']; ?>" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">RG:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="rg" class="form-control" placeholder="########-#" value="<?php echo $row_usuario['rg']; ?>" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">CPF:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="cpf" class="form-control" placeholder="#########-##" value="<?php echo $row_usuario['cpf']; ?>" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">E-mail:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="email" class="form-control" placeholder="exemplo@exemplo.com" value="<?php echo $row_usuario['email']; ?>" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Login</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="login" class="form-control" placeholder="Login" value="<?php echo $row_usuario['login']; ?>" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Senha</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="senha" class="form-control" placeholder="******" value="<?php echo $row_usuario['senha']; ?>" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Telefone:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="telefone" class="form-control" placeholder="DDD #####-####" value="<?php echo $row_usuario['telefone']; ?>" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Endereço:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="endereco" class="form-control" placeholder="Endereco Completo" value="<?php echo $row_usuario['endereco']; ?>" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nível:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nivel" class="form-control" placeholder="Nível" value="<?php echo $row_usuario['nivel']; ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nível:</label>
                                        <div class="col-sm-10">
                                            <select class="basic" name="nivel" required>
                                            <option style="color:red;" value="<?php echo $row_usuario['nivel']; ?>"><?php echo $row_usuario['nivel']; ?></option>
                                            <option value="Alto">> Alto</option>
                                            <option value="Medio">> Medio</option>
                                            <option value="Baixo">> Baixo</option>                                                                        
                                        </select>
                                        </div>
                                    </div>


                                    <input type="hidden" name="idusuario" value="<?php echo $row_usuario['idusuario']; ?>">
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Editar dados</button>
                                            <button type="reset" class="btn btn-warning">Limpar</button>
                                            <a type="button" class="btn btn-info" href="Usuario_Form_Pesquisa_Nome.php">Cancelar</a>
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
