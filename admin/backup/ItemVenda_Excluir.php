<?php 

    $iditemvenda = $_GET['iditemvenda'];

    require_once "ItemVenda.Class.php";

    $itemvenda = new ItemVenda();
    $itemvenda->iditemvenda = $iditemvenda;
    $itemvenda->excluir();
    //$msg = "Excluido com sucesso!";
    $msg = "<script>alert('Excluido com sucesso!');</script>";

?>

<?php $title = "Excluir ItemVenda"; ?>
<?php include "includes/header.php"; ?>

<section class="container">
    <?php 
        echo $msg; 
        echo "<script>window.location.href='ItemVenda_Form_Pesquisa_Nome.php'</script>";
    ?>
</section>

<?php include "includes/footer.php"; ?>
