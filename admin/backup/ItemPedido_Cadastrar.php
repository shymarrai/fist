<?php

// para mostrar os erros (padrão)
ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

try{
    
	if($_SERVER['REQUEST_METHOD'] != 'POST')
    header("Location: ItemPedido_Form.php");
    
   // Variáveis ligando ao formulário
$qtd = $_POST['qtd'];
    if($qtd=="") throw new Exception("Quantidade Inválido!");

$valor = $_POST['valor'];
    if($valor=="") throw new Exception("Valor Inválido!");
	
$idpedi = $_POST['idpedi'];
    if($idpedi=="") throw new Exception("IdPedido Inválido!");
	
$idprod = $_POST['idprod'];
    if($idprod=="") throw new Exception("IdProduto Inválido");
    
   
// inclue a conexao e faz a instancia (padrão) // 
require_once "ItemPedido.Class.php";

    $itempedido = new ItemPedido(); 
	$itempedido->qtd = $qtd;
    $itempedido->valor = $valor;
    $itempedido->idpedi = $idpedi;
	$itempedido->idprod = $idprod;
    $itempedido->inserir();    	
	
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
        echo "<script>window.location.href='ItemPedido_Form.php'</script>";?>

    </section>


    <?php require "includes/footer.php" ?>
