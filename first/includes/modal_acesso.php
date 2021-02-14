<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3 text-center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
        <br><br>
<script>	
function enviar(){
	var formulario = document.getElementById('f1');	
	if(document.getElementById('signin').checked == true) {	
	document.getElementById('repass').required = false;
	document.getElementById('nome').required = false;
	document.getElementById('rg').required = false;
	document.getElementById('cpf').required = false;
	document.getElementById('telefone').required = false;
	document.getElementById('endereco').required = false;
	document.getElementById('cep').required = false;
	document.getElementById('cidade').required = false;
	document.getElementById('estado').required = false;
	document.getElementById('estado').required = false;
	document.getElementById('f1').action = 'autenticarcliente.php';
	}else if(document.getElementById('signup').checked == true){
	document.getElementById('repass').required = true;
	document.getElementById('nome').required = true;
	document.getElementById('rg').required = true;
	document.getElementById('cpf').required = true;
	document.getElementById('telefone').required = true;
	document.getElementById('endereco').required = true;
	document.getElementById('cep').required = true;
	document.getElementById('cidade').required = true;
	document.getElementById('estado').required = true;
	document.getElementById('estado').required = true;
	document.getElementById('f1').action = 'Cliente_Cadastrar.php';
	}		
}
</script>
  <form name='PostForm' action='' method='POST' name='f1' id='f1'>

  <input checked id='signin' name='action' type='radio' value='signin' />
  <label for='signin' >Entrar</label>

  <input id='signup' name='action' type='radio' value='signup'/>
  <label for='signup' >Cadastrar</label>

  <div id='wrapper'>
   <div id='arrow'></div>

	<input type='email' id='email' placeholder='Email'  name='email' maxlength='45' size='45' required  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title='seu-email@exemplo.com'/>
    <input id='pass' placeholder='Senha' type='password' name='senha' maxlength='45' required size='45'>
    <input id='repass' placeholder='Confirme a senha' type='password' required name='senha2'>
	

	<hr/> Informações pessoais <hr/>
	<input type='text' placeholder='Nome' id='nome' name='nome' required maxlength="150" size='150' pattern="[a-zA-Z\s]+$" title='Este campo deve apenas conter letras'/>
	<input type='number' placeholder='Indentidade' id='rg' name='rg' maxlength='15' size='15' required title='Este campo deve apenas conter números'/>
	<input type='number' placeholder='CPF'  maxlength='14'size='14' name='cpf' id='cpf' required title='Este campo deve apenas conter números'/>
	<input type='number' placeholder='Telefone' maxlength='15' size='15' name='telefone' id='telefone' required pattern="[0-9]+$" title='DDD+numero' />
	<input type='number' placeholder='CEP' maxlength='11' size='11' name='cep' id='cep' required maxlength='11' title='Este campo deve apenas conter números'/>
	<input type='text' placeholder='Endereço' name='endereco' id='endereco' maxlength='80' size='80' required pattern="[a-zA-Z\s0-9º:]+$" title='Este campo deve apenas conter letras e números'/>
	<input type='text' placeholder='Cidade' id='cidade' name='cidade' maxlength='60' size='60' required pattern="[a-zA-Z\s]+$" title='Este campo deve apenas conter letras'/>
	<input type='text' placeholder='Estado' id='estado' name='estado' maxlength='45' size='45' required pattern="[a-zA-Z\s]+$" title='Este campo deve apenas conter letras' />
  </div>
  <button type='submit' value='Cadastrar Usuário' name='SendPostForm' id='SendPostForm'   onClick="enviar()" >
    <span>
      Entrar
		<br>
      Entrar
		<br>
      Entrar
    </span>
  </button>
</form>
      </div>
    </div>
  </div>
</div>