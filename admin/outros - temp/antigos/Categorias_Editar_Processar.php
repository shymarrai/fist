<?php
	include_once("conexao.php");

	$idcategorias = mysqli_real_escape_string($conn, $_POST['idcategorias']);
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $descricao = mysqli_real_escape_string($conn, $_POST['descricao']);
    $marca = mysqli_real_escape_string($conn, $_POST['marca']);
	
    $result_categorias = "UPDATE categorias SET nome='$nome', descricao='$descricao', marca='$marca' WHERE idcategorias = '$idcategorias'";
	
	$resultado_categorias = mysqli_query($conn, $result_categorias);	
?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../admin/Categorias_Form_Pesquisa_Nome.php'>
				<script type=\"text/javascript\">
					alert(\"Dados alterados com sucesso.\");
				</script>
			";	
   
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../admin/Categorias_Form_Pesquisa_Nome.php'>
				<script type=\"text/javascript\">
					alert(\"Dados não foram alterados com sucesso.\");
				</script>
			";	
		}?>
    </body>

    </html>
    <?php $conn->close(); ?>
