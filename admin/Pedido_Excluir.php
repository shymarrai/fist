<?php 

    $idpedido = $_GET['idpedido'];

    require_once "Pedido.Class.php";

    $pedido = new Pedido();
    $pedido->idpedido = $idpedido;
    $pedido->excluir();
    //$msg = "Excluido com sucesso!";
    $msg = "<script>alert('Excluido com sucesso!');</script>";

?>

<?php $title = "Excluir Pedido"; ?>
<?php include "includes/header.php"; ?>

<section class="container">
    <?php 
        echo $msg; 
        echo "<script>window.location.href='Pedido_Form_Pesquisa_Nome.php'</script>";
    ?>
</section>

<?php include "includes/footer.php"; ?>
