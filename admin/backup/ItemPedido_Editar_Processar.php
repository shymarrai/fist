<?php
	include_once("conexao.php");

	$iditempedido = mysqli_real_escape_string($conn, $_POST['iditempedido']);
	$qtd = mysqli_real_escape_string($conn, $_POST['qtd']);
    $valor = mysqli_real_escape_string($conn, $_POST['valor']);
    $idpedi = mysqli_real_escape_string($conn, $_POST['idpedi']);
    $idprod = mysqli_real_escape_string($conn, $_POST['idprod']);
	
	
    $result_itempedido = "UPDATE itempedido SET qtd='$qtd', valor='$valor', idpedi='$idpedi', idprod='$idprod' WHERE iditempedido = '$iditempedido'";
	
	$resultado_itempedido = mysqli_query($conn, $result_itempedido);	
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../admin/ItemPedido_Form_Pesquisa_Nome.php'>
				<script type=\"text/javascript\">
					alert(\"Dados alterados com sucesso.\");
				</script>
			";	
   
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../admin/ItemPedido_Form_Pesquisa_Nome.php'>
				<script type=\"text/javascript\">
					alert(\"Dados não foram alterados com sucesso.\");
				</script>
			";	
		}?>
    </body>

    </html>
    <?php $conn->close(); ?>
