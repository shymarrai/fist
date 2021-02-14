<?php

// para mostrar os erros (padrão)
ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

try{
    
	if($_SERVER['REQUEST_METHOD'] != 'POST')
    header("Location: Usuario_Form.php");
    
   // Variáveis ligando ao formulário
$nome = $_POST['nome'];
    if($nome=="") throw new Exception("Login Inválido!");

$rg = $_POST['rg'];
    if($rg=="") throw new Exception("Rg Inválido!");
	
$cpf = $_POST['cpf'];
    if($cpf=="") throw new Exception("CPF Inválido!");
	
$email = $_POST['email'];
    if($email=="") throw new Exception("Email Inválido");
    
$login = $_POST['login'];
    if($login=="") throw new Exception("Login Inválido");
	
$senha = $_POST['senha'];
    if($senha=="") throw new Exception("Senha Inválida");
	
$telefone = $_POST['telefone'];
    if($telefone=="") throw new Exception("Telefone Inválido!");
	
$endereco = $_POST['endereco'];
    if($endereco=="") throw new Exception("Endereço Inválido!");
	
$nivel= $_POST['nivel'];
    if($nivel=="") throw new Exception("Nivel Inválido!");
	
	
   
// inclue a conexao e faz a instancia (padrão) // 
require_once "Usuario.Class.php";

    $usuario = new Usuario(); 
	$usuario->nome = $nome;
	$usuario->rg = $rg;
	$usuario->cpf = $cpf;
	$usuario->email = $email;
    $usuario->login = $login;
	$usuario->senha = $senha;
	$usuario->telefone = $telefone;
	$usuario->endereco = $endereco;
	$usuario->nivel = $nivel;
        if($usuario->loginExiste()) throw new Exception ("<script>alert('O Usuário já existe!');</script>");
    $usuario->inserir();    	
	
    $msg = "<script>alert('Usuario cadastrado com sucesso!');</script>";

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
        echo "<script>window.location.href='Usuario_Form.php'</script>";?>

    </section>


    <?php require "includes/footer.php" ?>
