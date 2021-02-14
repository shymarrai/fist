<?php
$title ="Cadastrar Venda"; 
// para mostrar os erros (padrão)
ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

try{
    
	if($_SERVER['REQUEST_METHOD'] != 'POST')
    header("Location: Venda_Form.php");
    
   // Variáveis ligando ao formulário
    /*$totvenda = $_POST['totvenda'];
        if($totvenda=="") throw new Exception("Total Venda Inválido!");

    $frete = $_POST['frete'];
        if($frete=="") throw new Exception("Frete Inválido!");*/

    $idcli = $_POST['idcli'];
        if($idcli=="") throw new Exception("Id Cliente Inválido");

    $idu = $_POST['idu'];
        if($idu=="") throw new Exception("Id Usuario Inválido");

    $pedidoid = $_POST['pedidoid'];
        if($pedidoid=="") throw new Exception("Id Pedido Inválido!");


    // inclue a conexao e faz a instancia (padrão) // 
    require_once "Venda.Class.php";

        $venda = new Venda(); 
        //$venda->totvenda = $totvenda;
        //$venda->frete = $frete;
        $venda->idcli = $idcli;
        $venda->idu = $idu;
        $venda->pedidoid = $pedidoid;

        $venda->inserir();    	

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
       // echo "<script>window.location.href='Venda_Form.php'</script>";?>

    </section>


    <?php require "includes/footer.php" ?>
