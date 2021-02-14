<?php 

    $idprodutos = $_GET['idprodutos'];

/* EXCLUIR CATEGORIA */
    
    include_once("conexao.php");

    $consulta = "SELECT idcategorias FROM produtos WHERE idprodutos = $idprodutos";
    $con = $conn->query($consulta) or die($conn->error);
    while($dados = $con->fetch_array()){
                $idcategorias = $dados["idcategorias"];
    }

     $result_cat = "DELETE FROM categorias WHERE idcategorias = $idcategorias";	
    $resultado_cat = mysqli_query($conn, $result_cat);	
    


/* EXCLUIR PRODUTO */
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
