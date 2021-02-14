<?php
	include_once("conexao.php");

	$idvenda = mysqli_real_escape_string($conn, $_POST['idvenda']);
	/*$totvenda = mysqli_real_escape_string($conn, $_POST['totvenda']);
    $frete = mysqli_real_escape_string($conn, $_POST['frete']);*/
    $idcli = mysqli_real_escape_string($conn, $_POST['idcli']);
	$idu = mysqli_real_escape_string($conn, $_POST['idu']);
    $pedidoid = mysqli_real_escape_string($conn, $_POST['pedidoid']);
	
    /*$result_venda = "UPDATE venda SET totvenda='$totvenda', frete='$frete', idcli='$idcli', idu='$idu', pedidoid='$pedidoid' WHERE idvenda = '$idvenda'";*/
    $result_venda = "UPDATE venda SET idcli='$idcli', idu='$idu', pedidoid='$pedidoid' WHERE idvenda = '$idvenda'";
	
	$resultado_venda = mysqli_query($conn, $result_venda);	
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../admin/Venda_Form_Pesquisa_Nome.php'>
				<script type=\"text/javascript\">
					alert(\"Dados alterados com sucesso.\");
				</script>
			";	
   
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../admin/Venda_Form_Pesquisa_Nome.php'>
				<script type=\"text/javascript\">
					alert(\"Dados não foram alterados com sucesso.\");
				</script>
			";	
		}?>
    </body>

    </html>
    <?php $conn->close(); ?>
