<?php
	include_once("conexao.php");

	$idstatuspedido = mysqli_real_escape_string($conn, $_POST['idstatuspedido']);
	$descricaostatus = mysqli_real_escape_string($conn, $_POST['descricaostatus']);
    $datavalida = mysqli_real_escape_string($conn, $_POST['datavalida']);
    
    $result_statuspedido = "UPDATE statuspedido SET descricaostatus='$descricaostatus', datavalida='$datavalida' WHERE idstatuspedido = '$idstatuspedido'";
	
	$resultado_statuspedido = mysqli_query($conn, $result_statuspedido);	
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../admin/StatusPedido_Form_Pesquisa_Nome.php'>
				<script type=\"text/javascript\">
					alert(\"Dados alterados com sucesso.\");
				</script>
			";	
   
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../admin/StatusPedido_Form_Pesquisa_Nome.php'>
				<script type=\"text/javascript\">
					alert(\"Dados não foram alterados com sucesso.\");
				</script>
			";	
		}?>
    </body>

    </html>
    <?php $conn->close(); ?>
