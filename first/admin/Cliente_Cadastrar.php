<?php

// para mostrar os erros (padrão)
ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

try{
    
	if($_SERVER['REQUEST_METHOD'] != 'POST')
    header("Location: login.php");
    
   // Variáveis ligando ao formulário
$nome = $_POST['nome'];
    if($nome=="") throw new Exception("Login Inválido!");

$rg = $_POST['rg'];
    if($rg=="") throw new Exception("Rg Inválido!");
	
$cpf = $_POST['cpf'];
    if($cpf=="") throw new Exception("CPF Inválido!");
	
$email = $_POST['email'];
    if($email=="") throw new Exception("Email Inválido");
	
$senha = $_POST['senha'];
    if($senha=="") throw new Exception("Senha Inválida");
	
$telefone = $_POST['telefone'];
    if($telefone=="") throw new Exception("Telefone Inválido!");

$cep = $_POST['cep'];
    if($cep=="") throw new Exception("CEP Inválido!");
	
$endereco = $_POST['endereco'];
    if($endereco=="") throw new Exception("Endereço Inválido!");
	
$cidade= $_POST['cidade'];
    if($cidade=="") throw new Exception("Cidade Inválido!");
	
$estado= $_POST['estado'];
    if($estado=="") throw new Exception("Estado Inválido!");
	
	
	
	
   
// inclue a conexao e faz a instancia (padrão) // 
require_once "Cliente.Class.php";

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
    $cliente->inserir();    	
	
    
   
    $msg = "<script>alert('Cadastrado com sucesso!');</script>";

}catch(PDOException $e){
    $msg = "<script>alert('Error, Contate o administrador!');</script>";   
    echo $e->getMessage();
}catch(Exception $e){
    $msg = $e->getMessage();
}

?>




    <?php $title ="Cadastro"; ?>

    <section class="container">

        <?php echo $msg;
        echo "<script>window.location.href='Cliente_Form.php'</script>";?>

    </section>
