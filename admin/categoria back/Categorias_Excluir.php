<?php 

    $idcategorias = $_GET['idcategorias'];

    require_once "Categorias.Class.php";

    $categorias = new Categorias();
    $categorias->idcategorias = $idcategorias;
    $categorias->excluir();
    
    $msg = "<script>alert('Excluido com sucesso!');</script>";

?>

<?php $title = "Excluir Categorias"; ?>
<?php include "includes/header.php"; ?>

<section class="container">
    <?php 
        echo $msg; 
        echo "<script>window.location.href='Categorias_Lista.php'</script>";
    ?>
</section>

<?php include "includes/footer.php"; ?>
