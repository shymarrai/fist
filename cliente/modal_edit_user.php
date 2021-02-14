<div tabindex="-1" class="modal fade" id="modal_edit_user" role="dialog">
	<center>
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button class="close" aria-hidden="true" type="button" data-dismiss="modal">×</button>
            <h3>Alterar Informações</h3>
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

<div id="load" style="display: block">

                <ul class="bokeh">
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
           
</div>
         </div>
         <div class="modal-body">
<form class="form-horizontal col-md-12" method="POST" action="" enctype="multipart/form-data" id='form'>
                                    <div class="form-group">
                                        <div class="sep-form">
                                            <input type="text" id='nome' name="nome" class="form-control" id="inputEmail3" placeholder="Nome Completo" value="<?php echo $row_cliente['nome']; ?>" required="required"   >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="sep-form">
                                            <input type="text" name="rg" class="form-control" id="rg" placeholder="########-#" value="<?php echo $row_cliente['rg']; ?>"    >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="sep-form">
                                            <input type="text" name="cpf" class="form-control" id="cpf" placeholder="#########-##" value="<?php echo $row_cliente['cpf']; ?>"    >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="sep-form">
                                            <input type="text"  id='email' name="email" class="form-control" id="inputEmail3" placeholder="exemplo@exemplo.com" value="<?php echo $row_cliente['email']; ?>" required="required"    >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="sep-form">
                                            <input type="password"  id='senha' name="senha" class="form-control" id="inputEmail3" placeholder="******" value="<?php echo $row_cliente['senha']; ?>" required="required"   >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="sep-form">
                                            <input type="text"  id='tel' name="telefone" class="form-control" id="inputEmail3" placeholder="DDD #####-####" value="<?php echo $row_cliente['telefone']; ?>" required="required"   >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="sep-form">
                                            <input type="text" id='cep'  name="cep" class="form-control" id="inputEmail3" placeholder="CEP" value="<?php echo $row_cliente['cep']; ?>" required="required"    >
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="sep-form">
                                            <input type="text" name="endereco"  id='end' class="form-control" id="inputEmail3" placeholder="Endereco Completo" value="<?php echo $row_cliente['endereco']; ?>" required="required"    >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="sep-form">
                                            <input type="text" name="cidade"  id='cid' class="form-control" id="inputEmail3" placeholder="Cidade" value="<?php echo $row_cliente['cidade']; ?>" required="required"    >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="sep-form">
                                            <input type="text" name="estado" id='est' class="form-control" id="inputEmail3" placeholder="Estado" value="<?php echo $row_cliente['estado']; ?>" required="required"    >
                                        </div>
                                    </div>

									
						<br><br>
                                    <input type="hidden" name="idcliente" value="<?php echo $row_cliente['idcliente']; ?>">
                                    <div class="form-group">
									
                                        <div class="btns-form-user botao">
										
                                            <input id="btn-entrar-user" type="submit" class="btn btn-info" value='Salvar'  onClick="ExecutaAcao('Cliente_Editar_Processar')">
											
											<input id="btn-cancelar-user" type="button" class="btn btn-info"  value='Cancelar' >
											<input id="btn-cancelar-user"  type="button" class="btn btn-danger" value='Excluir Conta' onClick= "ExecutaAcao('Cliente_Excluir')">
										</div>
									</div>
                                </form>
         </div>
   </div>
	</div>
		</center>
</div>