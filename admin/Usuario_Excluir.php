<?php 

    $idusuario = $_GET['idusuario'];

    require_once "Usuario.Class.php";

    $usuario = new Usuario();
    $usuario->idusuario = $idusuario;
    $usuario->excluir();
    //$msg = "Excluido com sucesso!";
    $msg = "<script>alert('Excluido com sucesso!');</script>";

?>

<?php $title = "Excluir Usuario"; ?>
<?php include "includes/header.php"; ?>

<section class="container">
    <?php 
        echo $msg; 
        echo "<script>window.location.href='Usuario_Form_Pesquisa_Nome.php'</script>";
    ?>
</section>

<?php include "includes/footer.php"; ?>
