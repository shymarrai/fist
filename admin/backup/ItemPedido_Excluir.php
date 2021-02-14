<?php 

    $iditempedido = $_GET['iditempedido'];

    require_once "ItemPedido.Class.php";

    $itempedido = new ItemPedido();
    $itempedido->iditempedido = $iditempedido;
    $itempedido->excluir();
    //$msg = "Excluido com sucesso!";
    $msg = "<script>alert('Excluido com sucesso!');</script>";

?>

<?php $title = "Excluir Item Pedido"; ?>
<?php include "includes/header.php"; ?>

<section class="container">
    <?php 
        echo $msg; 
        echo "<script>window.location.href='ItemPedido_Form_Pesquisa_Nome.php'</script>";
    ?>
</section>

<?php include "includes/footer.php"; ?>
