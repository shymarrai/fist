<?php
	include_once("conexao.php");

    
	$idprodutos = mysqli_real_escape_string($conn, $_POST['idprodutos']);
    $idcategorias = mysqli_real_escape_string($conn, $_POST['idcategorias']);
	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $valor = mysqli_real_escape_string($conn, $_POST['valor']);
    $modelo = mysqli_real_escape_string($conn, $_POST['modelo']);
    $detalhes = mysqli_real_escape_string($conn, $_POST['detalhes']);
    $img = $_FILES['img'];

    $nomecat = mysqli_real_escape_string($conn, $_POST['nomecat']);
    $marca = mysqli_real_escape_string($conn, $_POST['marca']);
    $colecao = mysqli_real_escape_string($conn, $_POST['colecao']);

/* ATUALIZAR CATEGORIA */
    $result_cat = "UPDATE categorias SET nomecat='$nomecat', marca='$marca', colecao='$colecao' WHERE idcategorias = '$idcategorias'";	
    $resultado_cat = mysqli_query($conn, $result_cat);	

/* //CATEGORIA */


/* Validacao da Imagem  E ATUALIZACAO PRODUTO*/
    
    if (!empty($img["name"])) {
		// Largura máxima em pixels
		$largura = 9500000;
		// Altura máxima em pixels
		$altura = 9800000;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 1000000000;
		$error = array();
    	// Verifica se o arquivo é uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $img["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	} 
		// Pega as dimensões da imagem
		$dimensoes = getimagesize($img["tmp_name"]);
		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}
		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}	
		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($img["size"] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}
		// Se não houver nenhum erro
		if (count($error) == 0) {
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $img["name"], $ext);
        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "./img/" . $nome_imagem;
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($img["tmp_name"], $caminho_imagem);
			// Insere os dados no banco
		}
		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br />";
			}
		}
    $imag = $nome_imagem;
    
      $result_produtos = "UPDATE produtos SET nome='$nome', valor='$valor', modelo='$modelo', detalhes='$detalhes', idcategorias='$idcategorias', img='$imag' WHERE idprodutos = '$idprodutos'";
	
	$resultado_produtos = mysqli_query($conn, $result_produtos);	
        
        
}else{
        /* ELE NAO VAI ALTERAR A IMAGEM CASO NAO ESCOLHA UMA NOVA */
        $result_produtos = "UPDATE produtos SET nome='$nome', valor='$valor', modelo='$modelo', detalhes='$detalhes', idcategorias='$idcategorias' WHERE idprodutos = '$idprodutos'";

        $resultado_produtos = mysqli_query($conn, $result_produtos);	
        }

/* Fim da validacao imagem E ATUALIZACAO DO PRODUTO*/

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
