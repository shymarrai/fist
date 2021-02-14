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
    if($nome=="") throw new Exception("Nome Inválido!");

$descricao = $_POST['descricao'];
    if($descricao=="") throw new Exception("Descricao Inválido!");
	
$marca = $_POST['marca'];
    if($marca=="") throw new Exception("Marca Inválido!");
	
	
   
// inclue a conexao e faz a instancia (padrão) // 
require_once "Categorias.Class.php";

    $categorias = new Categorias(); 
	$categorias->nome = $nome;
    $categorias->descricao = $descricao;
    $categorias->marca = $marca;
    
    $categorias->inserir();    	
	
    
   
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
        echo "<script>window.location.href='Categorias_Form.php'</script>";?>

    </section>
