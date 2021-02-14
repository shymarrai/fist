<?php

// para mostrar os erros (padrão)
ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

try{
    
	if($_SERVER['REQUEST_METHOD'] != 'POST')
    header("Location: ItemVenda_Form.php");
    
   // Variáveis ligando ao formulário
$datavenda = $_POST['datavenda'];
    if($datavenda=="") throw new Exception("Data Venda Inválida!");

$prazo = $_POST['prazo'];
    if($prazo=="") throw new Exception("Prazo Inválido!");
	
$idpedi = $_POST['idpedi'];
    if($idpedi=="") throw new Exception("Id Pedido Inválido!");
	
   
// inclue a conexao e faz a instancia (padrão) // 
require_once "ItemVenda.Class.php";

    $itemvenda = new ItemVenda(); 
	$itemvenda->datavenda = $datavenda;
	$itemvenda->prazo = $prazo;
	$itemvenda->idpedi = $idpedi;
	
    $itemvenda->inserir();    	
	
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
        echo "<script>window.location.href='ItemVenda_Form.php'</script>";?>

    </section>


    <?php require "includes/footer.php" ?>
