<?php 

    $idstatuspedido = $_GET['idstatuspedido'];

    require_once "StatusPedido.Class.php";

    $statuspedido = new Statuspedido ();
    $statuspedido->idstatuspedido = $idstatuspedido;
    $statuspedido->excluir();
    //$msg = "Excluido com sucesso!";
    $msg = "<script>alert('Excluido com sucesso!');</script>";

?>

<?php $title = "Excluir Status Pedido"; ?>
<?php include "includes/header.php"; ?>

<section class="container">
    <?php 
        echo $msg; 
        echo "<script>window.location.href='StatusPedido_Form_Pesquisa_Nome.php'</script>";
    ?>
</section>

<?php include "includes/footer.php"; ?>
