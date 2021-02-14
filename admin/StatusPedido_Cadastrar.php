<?php

// para mostrar os erros (padrão)
ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

try{
    
	if($_SERVER['REQUEST_METHOD'] != 'POST')
    header("Location: StatusPedido_Form.php");
    
   // Variáveis ligando ao formulário
$descricaostatus = $_POST['descricaostatus'];
    if($descricaostatus=="") throw new Exception("Descricao Inválida!");

$datavalida = $_POST['datavalida'];
    if($datavalida=="") throw new Exception("Data Inválida!");
	
   
// inclue a conexao e faz a instancia (padrão) // 
require_once "Statuspedido.Class.php";

    $statuspedido = new Statuspedido ();
	$statuspedido->descricaostatus = $descricaostatus;
	$statuspedido->datavalida = $datavalida;
    $statuspedido->inserir();
	
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
        echo "<script>window.location.href='StatusPedido_Form.php'</script>";?>

    </section>


    <?php require "includes/footer.php" ?>
