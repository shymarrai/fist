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

$valor = $_POST['valor'];
    if($valor=="") throw new Exception("Valor Inválido!");
	
$modelo = $_POST['modelo'];
    if($modelo=="") throw new Exception("Modelo Inválido!");
	
$detalhes = $_POST['detalhes'];
    if($detalhes=="") throw new Exception("Detalhes Inválido");
	
$idcategorias = $_POST['idcategorias'];
    if($idcategorias=="") throw new Exception("Categoria Inválida");

   
// inclue a conexao e faz a instancia (padrão) // 
require_once "Produto.Class.php";

    $produtos = new Produtos(); 
	$produtos->nome = $nome;
    $produtos->valor = $valor;
    $produtos->modelo = $modelo;
    $produtos->detalhes = $detalhes;
    $produtos->idcategorias = $idcategorias;
    
    $produtos->inserir();    	
	
    
   
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
        echo "<script>window.location.href='Produto_Form.php'</script>";?>

    </section>
