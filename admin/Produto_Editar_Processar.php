<?php

	include_once("conexao.php");

    
	$idprodutos = mysqli_real_escape_string($conn, $_POST['idprodutos']);
    $categoriasid = mysqli_real_escape_string($conn, $_POST['categoriasid']);

	$nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $valor = mysqli_real_escape_string($conn, $_POST['valor']);
    $modelo = mysqli_real_escape_string($conn, $_POST['modelo']);
    $detalhes = mysqli_real_escape_string($conn, $_POST['detalhes']);
    $quantidade = mysqli_real_escape_string($conn, $_POST['quantidade']);
    $idped = mysqli_real_escape_string($conn, $_POST['idped']);

    $img1 = $_FILES['img1'];
    $img2 = $_FILES['img2'];
    $img3 = $_FILES['img3'];
    $img4 = $_FILES['img4'];

    $nomecat = mysqli_real_escape_string($conn, $_POST['nomecat']);
    $marca = mysqli_real_escape_string($conn, $_POST['marca']);
    $colecao = mysqli_real_escape_string($conn, $_POST['colecao']);

/* ATUALIZAR CATEGORIA */
    $result_cat = "UPDATE categorias SET nomecat='$nomecat', marca='$marca', colecao='$colecao' WHERE idcategorias = '$categoriasid'";	
    $resultado_cat = mysqli_query($conn, $result_cat);	

/* //CATEGORIA */


/* Validacao da Imagem  E ATUALIZACAO PRODUTO*/
    
        /* IMAGEM 1 */
        
        if (!empty($img1["name"])) {
		// Largura máxima em pixels
		$largura = 9500000;
		// Altura máxima em pixels
		$altura = 9800000;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 1000000000;
		$error = array();
    	// Verifica se o arquivo é uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $img1["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	} 
		// Pega as dimensões da imagem
		$dimensoes = getimagesize($img1["tmp_name"]);
		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}
		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}	
		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($img1["size"] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}
		// Se não houver nenhum erro
		if (count($error) == 0) {
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $img1["name"], $ext);
        	// Gera um nome único para a imagem
        	$nome_imagem1 = md5(uniqid(time())) . "." . $ext[1];
        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "./img/" . $nome_imagem1;
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($img1["tmp_name"], $caminho_imagem);
			// Insere os dados no banco
		}
		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br />";
			}
		}
            
             $img1 = $nome_imagem1;
            $result_produtos1 = "UPDATE produtos SET img1='$img1' WHERE idprodutos = '$idprodutos'";
	       $resultado_produtos1 = mysqli_query($conn, $result_produtos1);
            
        }
/*
        if ($img1 == null || $img1 == "" || empty($img1)) {
            $consulta = "SELECT img1 FROM categorias WHERE idcategorias = $categoriasid";
            $con = $conn->query($consulta) or die($conn->error);

            while($dados = $con->fetch_array()){
                $img1 = $dados["img1"];
            }}
*/


            /* IMAGEM 2 */
            
            if (!empty($img2["name"])) {
		// Largura máxima em pixels
		$largura = 9500000;
		// Altura máxima em pixels
		$altura = 9800000;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 1000000000;
		$error = array();
    	// Verifica se o arquivo é uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $img2["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	} 
		// Pega as dimensões da imagem
		$dimensoes = getimagesize($img2["tmp_name"]);
		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}
		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}	
		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($img2["size"] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}
		// Se não houver nenhum erro
		if (count($error) == 0) {
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $img2["name"], $ext);
        	// Gera um nome único para a imagem
        	$nome_imagem2 = md5(uniqid(time())) . "." . $ext[1];
        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "./img/" . $nome_imagem2;
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($img2["tmp_name"], $caminho_imagem);
			// Insere os dados no banco
		}
		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br />";
			}
		}
                $img2 = $nome_imagem2;
                $result_produtos2 = "UPDATE produtos SET img2='$img2' WHERE idprodutos = '$idprodutos'";
                $resultado_produtos2 = mysqli_query($conn, $result_produtos2);
                
        }
        /*if ($img2 == null || $img2 == "" || empty($img2)) {
            $consulta = "SELECT img2 FROM categorias WHERE idcategorias = $categoriasid";
            $con = $conn->query($consulta) or die($conn->error);

            while($dados = $con->fetch_array()){
                $img2 = $dados["img2"];
            }}
                */
                /* IMAGEM 3 */
                
                if (!empty($img3["name"])) {
		// Largura máxima em pixels
		$largura = 9500000;
		// Altura máxima em pixels
		$altura = 9800000;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 1000000000;
		$error = array();
    	// Verifica se o arquivo é uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $img3["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	} 
		// Pega as dimensões da imagem
		$dimensoes = getimagesize($img3["tmp_name"]);
		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}
		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}	
		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($img3["size"] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}
		// Se não houver nenhum erro
		if (count($error) == 0) {
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $img3["name"], $ext);
        	// Gera um nome único para a imagem
        	$nome_imagem3 = md5(uniqid(time())) . "." . $ext[1];
        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "./img/" . $nome_imagem3;
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($img3["tmp_name"], $caminho_imagem);
			// Insere os dados no banco
		}
		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br />";
			}
		}
                    $img3 = $nome_imagem3;
                    $result_produtos3 = "UPDATE produtos SET img3='$img3' WHERE idprodutos = '$idprodutos'";
	           $resultado_produtos3 = mysqli_query($conn, $result_produtos3);
        }
       /* if ($img3 == null || $img3 == "" || empty($img3)) {
            $consulta = "SELECT img3 FROM categorias WHERE idcategorias = $categoriasid";
            $con = $conn->query($consulta) or die($conn->error);

            while($dados = $con->fetch_array()){
                $img3 = $dados["img3"];
            }}
            
        */
    
        /* IMAGEM 4 */ /* OK */
                
        if (!empty($img4["name"])) {
		// Largura máxima em pixels
		$largura = 9500000;
		// Altura máxima em pixels
		$altura = 9800000;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 1000000000;
		$error = array();
    	// Verifica se o arquivo é uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $img4["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	} 
		// Pega as dimensões da imagem
		$dimensoes = getimagesize($img4["tmp_name"]);
		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}
		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}	
		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($img4["size"] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}
		// Se não houver nenhum erro
		if (count($error) == 0) {
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $img4["name"], $ext);
        	// Gera um nome único para a imagem
        	$nome_imagem4 = md5(uniqid(time())) . "." . $ext[1];
        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "./img/" . $nome_imagem4;
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($img4["tmp_name"], $caminho_imagem);
			// Insere os dados no banco
		}
		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br />";
			}
		}
            $img4 = $nome_imagem4;         
            $result_produtos4 = "UPDATE produtos SET img4='$img4' WHERE idprodutos = '$idprodutos'";
	       $resultado_produtos4 = mysqli_query($conn, $result_produtos4);
            
        }
        

        /*if ($img4 == null || $img4 == "" || empty($img4)) {
            $consulta = "SELECT img4 FROM categorias WHERE idcategorias = $categoriasid";
            $con = $conn->query($consulta) or die($conn->error);

            while($dados = $con->fetch_array()){
                $img4 = $dados["img4"];
            }}
                    */
        
   $result_produtos5 = "UPDATE produtos SET nome='$nome', valor='$valor', modelo='$modelo', detalhes='$detalhes', quantidade='$quantidade', categoriasid='$categoriasid', idped='$idped' WHERE idprodutos = '$idprodutos'";
	
	$resultado_produtos5 = mysqli_query($conn, $result_produtos5);
    
 

/* Fim da validacao imagem E ATUALIZACAO DO PRODUTO*/

?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <?php
		if(mysqli_affected_rows($conn) >= 0){	
            /* NAO CONSEGUI RESOLVER DE OUTRA MANEIRA */		
            
           echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../admin/Produto_Form_Pesquisa_Nome.php'>
				<script type=\"text/javascript\">
					alert(\"Dados alterados com sucesso.\");
				</script>
			";	        
   
		}else{
            echo "erro";
            
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../admin/Produto_Form_Pesquisa_Nome.php'>
				<script type=\"text/javascript\">
					alert(\"Dados não foram alterados com sucesso.\");
				</script>
			";

		} 
        ?>
    </body>

    </html>

    <?php $conn->close(); ?>
