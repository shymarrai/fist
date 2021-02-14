<?php 

    $idprodutos = $_GET['idprodutos'];

    require_once "Produto.Class.php";

    $produtos = new Produtos();
    $produtos->idprodutos = $idprodutos;
    $produtos->excluir();
    
    $msg = "<script>alert('Excluido com sucesso!');</script>";

?>

<?php $title = "Excluir Produto"; ?>
<?php include "includes/header.php"; ?>

<section class="container">
    <?php 
        echo $msg; 
        echo "<script>window.location.href='Produto_Lista.php'</script>";
    ?>
</section>

<?php include "includes/footer.php"; ?>
