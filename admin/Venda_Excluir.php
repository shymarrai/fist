<?php 

    $idvenda = $_GET['idvenda'];

    require_once "Venda.Class.php";

    $venda = new Venda();
    $venda->idvenda = $idvenda;
    $venda->excluir();
    //$msg = "Excluido com sucesso!";
    $msg = "<script>alert('Excluido com sucesso!');</script>";

?>

<?php $title = "Excluir Venda"; ?>
<?php include "includes/header.php"; ?>

<section class="container">
    <?php 
        echo $msg; 
        echo "<script>window.location.href='Venda_Form_Pesquisa_Nome.php'</script>";
    ?>
</section>

<?php include "includes/footer.php"; ?>
