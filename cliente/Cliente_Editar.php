
<?php
	include_once("conexao.php");
	include_once 'header.php';
    $cliente = new Cliente();
	$info = $cliente->listacliente($_SESSION['cliente']);
	$idcliente = $info[0]['idcliente'];
	$result_cliente = "SELECT * FROM cliente WHERE idcliente = '$idcliente' LIMIT 1";
	
	$resultado_cliente= mysqli_query($conn, $result_cliente);
	$row_cliente = mysqli_fetch_assoc($resultado_cliente);	
	
?>

                <div class="col-md-12 info">
                    <div class="content-box-large">
                        <div class="panel-body">
                            <div class="container theme-showcase col-md-12" role="main">

                                <div class="page-header col-xs-12 col-md-12">
                                    <center>
                                        <h2>Editar dados de
                                            <span class='nome'><?php echo $info[0]['nome'];?> ...</span>
                                        </h2>
                                    </center>
                                </div>
                                <br><br>

                                <form class="form-horizontal col-md-12" method="POST" action="" enctype="multipart/form-data" id='form'>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for='nome'>Nome:</label>
                                        <div class="col-sm-8">
                                            <input type="text" id='nome' name="nome" class="form-control" id="inputEmail3" placeholder="Nome Completo" value="<?php echo $row_cliente['nome']; ?>" required="required"   >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for='rg'>RG:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="rg" class="form-control" id="rg" placeholder="########-#" value="<?php echo $row_cliente['rg']; ?>"    >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for='cpf'>CPF:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="cpf" class="form-control" id="cpf" placeholder="#########-##" value="<?php echo $row_cliente['cpf']; ?>"    >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for='email'>E-mail:</label>
                                        <div class="col-sm-8" for='email'>
                                            <input type="text"  id='email' name="email" class="form-control" id="inputEmail3" placeholder="exemplo@exemplo.com" value="<?php echo $row_cliente['email']; ?>" required="required"    >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for='senha' >Senha:</label>
                                        <div class="col-sm-8">
                                            <input type="password"  id='senha' name="senha" class="form-control" id="inputEmail3" placeholder="******" value="<?php echo $row_cliente['senha']; ?>" required="required"   >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for='tel' >Telefone:</label>
                                        <div class="col-sm-8">
                                            <input type="text"  id='tel' name="telefone" class="form-control" id="inputEmail3" placeholder="DDD #####-####" value="<?php echo $row_cliente['telefone']; ?>" required="required"   >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for='cep' >CEP:</label>
                                        <div class="col-sm-8">
                                            <input type="text" id='cep'  name="cep" class="form-control" id="inputEmail3" placeholder="CEP" value="<?php echo $row_cliente['cep']; ?>" required="required"    >
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for='end' >Endereço:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="endereco"  id='end' class="form-control" id="inputEmail3" placeholder="Endereco Completo" value="<?php echo $row_cliente['endereco']; ?>" required="required"    >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for='cid' >Cidade:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="cidade"  id='cid' class="form-control" id="inputEmail3" placeholder="Cidade" value="<?php echo $row_cliente['cidade']; ?>" required="required"    >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for='est' >Estado:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="estado" id='est' class="form-control" id="inputEmail3" placeholder="Estado" value="<?php echo $row_cliente['estado']; ?>" required="required"    >
                                        </div>
                                    </div>


                                    <input type="hidden" name="idcliente" value="<?php echo $row_cliente['idcliente']; ?>">
                                    <div class="form-group">
									
                                        <div class="col-sm-offset-4 col-sm-8">
										
                                            <input type="submit" class="btn btn-info" value='Salvar'  onClick="ExecutaAcao('Cliente_Editar_Processar')">
											
											<input type="button" class="btn btn-info"  value='Cancelar' >
											</div>
                                            <input type="button" class="btn btn-danger" value='Excluir Conta' onClick= "ExecutaAcao('Cliente_Excluir')">
                                        
<br><br>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>


    <!-- div nao fechada no header -->
    </div>
<footer>
    <?php include "footer.php" ?>
</footer>