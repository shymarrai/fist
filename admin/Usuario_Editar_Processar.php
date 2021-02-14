<?php
	include_once("conexao.php");

	$idusuario = mysqli_real_escape_string($conn, $_POST['idusuario']);
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $rg = mysqli_real_escape_string($conn, $_POST['rg']);
    $cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
	$login = mysqli_real_escape_string($conn, $_POST['login']);
	$senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
	$endereco = mysqli_real_escape_string($conn, $_POST['endereco']);
    $nivel = mysqli_real_escape_string($conn, $_POST['nivel']);
	
	
    $result_usuario = "UPDATE usuario SET nome='$nome', rg='$rg', cpf='$cpf', email='$email', telefone='$telefone', endereco='$endereco', nivel='$nivel', login='$login' , senha='$senha' WHERE idusuario = '$idusuario'";
	
	$resultado_usuario = mysqli_query($conn, $result_usuario);	
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../admin/Usuario_Form_Pesquisa_Nome.php'>
				<script type=\"text/javascript\">
					alert(\"Dados alterados com sucesso.\");
				</script>
			";	
   
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../admin/Usuario_Form_Pesquisa_Nome.php'>
				<script type=\"text/javascript\">
					alert(\"Dados não foram alterados com sucesso.\");
				</script>
			";	
		}?>
    </body>

    </html>
    <?php $conn->close(); ?>
