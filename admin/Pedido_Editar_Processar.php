<?php
	include_once("conexao.php");

	$idpedido = mysqli_real_escape_string($conn, $_POST['idpedido']);
	$datadopedido = mysqli_real_escape_string($conn, $_POST['datadopedido']);
    $idstatuspedido = mysqli_real_escape_string($conn, $_POST['idstatuspedido']);
    $idclien = mysqli_real_escape_string($conn, $_POST['idclien']);
    
	
    $result_pedido = "UPDATE pedido SET datadopedido='$datadopedido', idstatuspedido='$idstatuspedido', idclien='$idclien' WHERE idpedido = '$idpedido'";
	
	$resultado_pedido = mysqli_query($conn, $result_pedido);	
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../admin/Pedido_Form_Pesquisa_Nome.php'>
				<script type=\"text/javascript\">
					alert(\"Dados alterados com sucesso.\");
				</script>
			";	
   
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../admin/Pedido_Form_Pesquisa_Nome.php'>
				<script type=\"text/javascript\">
					alert(\"Dados não foram alterados com sucesso.\");
				</script>
			";	
		}?>
    </body>

    </html>
    <?php $conn->close(); ?>
