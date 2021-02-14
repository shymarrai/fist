<?php 

    $idcliente = $_GET['idcliente'];

    require_once "Cliente.Class.php";

    $cliente = new Cliente();
    $cliente->idcliente = $idcliente;
    $cliente->excluir();
    
    $msg = "<script>alert('Excluido com sucesso!');</script>";

?>

<?php $title = "Excluir Cliente"; ?>
<?php include "includes/header.php"; ?>

<section class="container">
    <?php 
        echo $msg; 
        echo "<script>window.location.href='Cliente_Form_Pesquisa_Nome.php'</script>";
    ?>
</section>

<?php include "includes/footer.php"; ?>
