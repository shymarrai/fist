<?php

// para mostrar os erros (padrão)
ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

try{
    
	if($_SERVER['REQUEST_METHOD'] != 'POST')
    header("Location: Pedido_Form.php");
    
   // Variáveis ligando ao formulário
$datadopedido = $_POST['datadopedido'];
    if($datadopedido=="") throw new Exception("Data Inválido!");

$idstatuspedido = $_POST['idstatuspedido'];
    if($idstatuspedido=="") throw new Exception("Status Inválido!");
	
$idclien = $_POST['idclien'];
    if($idclien=="") throw new Exception("Cliente Inválido!");

   
// inclue a conexao e faz a instancia (padrão) // 
require_once "Pedido.Class.php";

    $pedido = new Pedido (); 
	$pedido->datadopedido = $datadopedido;
	$pedido->idstatuspedido = $idstatuspedido;
	$pedido->idclien = $idclien;
	
    $pedido->inserir();    	
	
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
        echo "<script>window.location.href='Pedido_Form.php'</script>";?>

    </section>


    <?php require "includes/footer.php" ?>
