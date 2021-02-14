<?php
	include_once("conexao.php");

	$idprodutos = mysqli_real_escape_string($conn, $_POST['idprodutos']);
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $valor = mysqli_real_escape_string($conn, $_POST['valor']);
    $modelo = mysqli_real_escape_string($conn, $_POST['modelo']);
    $detalhes = mysqli_real_escape_string($conn, $_POST['detalhes']);
	$idcategorias = mysqli_real_escape_string($conn, $_POST['idcategorias']);
    
    $result_produtos = "UPDATE produtos SET nome='$nome', valor='$valor', modelo='$modelo', detalhes='$detalhes', idcategorias='$idcategorias' WHERE idprodutos = '$idprodutos'";
	
	$resultado_produtos = mysqli_query($conn, $result_produtos);	
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../admin/Produto_Form_Pesquisa_Nome.php'>
				<script type=\"text/javascript\">
					alert(\"Dados alterados com sucesso.\");
				</script>
			";	
   
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../admin/Produto_Form_Pesquisa_Nome.php'>
				<script type=\"text/javascript\">
					alert(\"Dados não foram alterados com sucesso.\");
				</script>
			";	
		}?>
    </body>

    </html>
    <?php $conn->close(); ?>
