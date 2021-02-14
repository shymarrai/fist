<?php
	include_once("conexao.php");

	$iditemvenda = mysqli_real_escape_string($conn, $_POST['iditemvenda']);
	$datavenda = mysqli_real_escape_string($conn, $_POST['datavenda']);
    $prazo = mysqli_real_escape_string($conn, $_POST['prazo']);
    $idpedi = mysqli_real_escape_string($conn, $_POST['idpedi']);
    
	
    $result_itemvenda = "UPDATE itemvenda SET datavenda='$datavenda', prazo='$prazo', idpedi='$idpedi' WHERE iditemvenda = '$iditemvenda'";
	
	$resultado_itemvenda = mysqli_query($conn, $result_itemvenda);	
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../admin/ItemVenda_Form_Pesquisa_Nome.php'>
				<script type=\"text/javascript\">
					alert(\"Dados alterados com sucesso.\");
				</script>
			";	
   
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../admin/ItemVenda_Form_Pesquisa_Nome.php'>
				<script type=\"text/javascript\">
					alert(\"Dados não foram alterados com sucesso.\");
				</script>
			";	
		}?>
    </body>

    </html>
    <?php $conn->close(); ?>
