<?php

// para mostrar os erros (padrão)
ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

try{
    
	if($_SERVER['REQUEST_METHOD'] != 'POST')
    header("Location: acesso.php");
    
   // Variáveis ligando ao formulário
$nome = $_POST['nome'];
    if($nome=="") throw new Exception("<script>alert('Nome Inválido!');</script>");
	
$rg = $_POST['rg'];
    if($rg=="") throw new Exception("<script>alert('Rg Inválido!');</script>");
	
$cpf = $_POST['cpf'];
    if($cpf=="") throw new Exception("<script>alert('CPF Inválido!');</script>");
	
$email = $_POST['email'];
    if($email=="") throw new Exception("<script>alert('Email Inválido!');</script>");
    
$senha = $_POST['senha'];
    if($senha=="") throw new Exception("<script>alert('Senha Inválida!');</script>");
	
$telefone = $_POST['telefone'];
    if($telefone=="") throw new Exception("<script>alert('Telefone Inválido!');</script>");

$cep= $_POST['cep'];
    if($cep=="") throw new Exception("<script>alert('CEP Inválido!');</script>");
	
$endereco = $_POST['endereco'];
    if($endereco=="") throw new Exception("<script>alert('Endereço Inválido!');</script>");
	

$cidade= $_POST['cidade'];
    if($cidade=="") throw new Exception("<script>alert('Cidade Inválido!');</script>");
	
$estado= $_POST['estado'];
    if($estado=="") throw new Exception("<script>alert('Estado Inválido!');</script>");
	
	
	
	
   
// inclue a conexao e faz a instancia (padrão) // 
require_once "class/Cliente.Class.php";

    $cliente = new Cliente(); 
	$cliente->nome = $nome;
	$cliente->rg = $rg;
	$cliente->cpf = $cpf;
	$cliente->email = $email;
	$cliente->senha = $senha;
	$cliente->telefone = $telefone;
	$cliente->cep = $cep;
	$cliente->endereco = $endereco;
	$cliente->cidade = $cidade;
	$cliente->estado = $estado;
	
        if($cliente->loginExiste()) throw new Exception ("<script> alert('O Usuário já existe!')</script>");
    $cliente->senha = $senha;
    $cliente->inserircliente();    	
	
    
   
   
		$msg = "<script> alert('Cadastrado com sucesso')</script>";
}catch(PDOException $e){
    $msg = "<script> alert('Contate o administrador')</script>";  
    echo $e->getMessage();
}catch(Exception $e){
    $msg = $e->getMessage();
}

?>
    
    


<?php $title ="Cadastro"; ?>

<section class="container">
    
    <?php echo $msg; 
	echo "<script>window.location.href='../index.php'</script>";
	?>
    
</section>


    
	
	
	