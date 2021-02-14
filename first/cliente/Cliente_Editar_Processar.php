<?php
	include_once("conexao.php");

	$idcliente = mysqli_real_escape_string($conn, $_POST['idcliente']);
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $rg = mysqli_real_escape_string($conn, $_POST['rg']);
    $cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
	$senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
    $cep = mysqli_real_escape_string($conn, $_POST['cep']);
	$endereco = mysqli_real_escape_string($conn, $_POST['endereco']);
    $cidade = mysqli_real_escape_string($conn, $_POST['cidade']);
	$estado = mysqli_real_escape_string($conn, $_POST['estado']);
	
	
    $result_cliente = "UPDATE cliente SET nome='$nome', rg='$rg', cpf='$cpf', email='$email', senha='senha', telefone='$telefone', cep='$cep', endereco='$endereco', cidade='$cidade', estado='$estado' WHERE idcliente = '$idcliente'";
	
	$resultado_cliente = mysqli_query($conn, $result_cliente);	
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../cliente/Cliente_Editar.php'>
				<script type=\"text/javascript\">
					alert(\"Dados alterados com sucesso.\");
				</script>
			";	
   
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../cliente/Cliente_Editar.php'>
				<script type=\"text/javascript\">
					alert(\"Dados não foram alterados com sucesso.\");
				</script>
			";	
		}?>
    </body>

    </html>
    <?php $conn->close(); ?>
