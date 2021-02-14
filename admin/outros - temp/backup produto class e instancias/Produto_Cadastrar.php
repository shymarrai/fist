<?php

// para mostrar os erros (padrão)
ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

try{
    
	if($_SERVER['REQUEST_METHOD'] != 'POST')
    header("Location: login.php");
    
   // Variáveis ligando ao formulário
$nome = $_POST['nome'];
    if($nome=="") throw new Exception("Nome Inválido!");

$valor = $_POST['valor'];
    if($valor=="") throw new Exception("Valor Inválido!");
	
$modelo = $_POST['modelo'];
    if($modelo=="") throw new Exception("Modelo Inválido!");
	
$detalhes = $_POST['detalhes'];
    if($detalhes=="") throw new Exception("Detalhes Inválido");

$img = $_FILES['img'];
	//if($img=="") throw new Exception("Imagem Inválida");

/* Categoria */   
$nomecat = $_POST['nomecat'];
    if($nomecat=="") throw new Exception("Nome Inválido!");
	
$marca = $_POST['marca'];
    if($marca=="") throw new Exception("Marca Inválido!");
    
$colecao = $_POST['colecao'];
     if($colecao=="") throw new Exception("Colecao Inválido!");
	
/* inserindo dados no banco */
    include_once("conexao.php");
    
    $sql = "Insert into categorias (idcategorias, nomecat, marca, colecao)values(default, '$nomecat', '$marca',  '$colecao')";

	mysqli_query($conn, $sql) or die ("Erro");
    
/* fim categoria */
    
    
    
/* Validacao da Imagem */
    
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
    $img = $nome_imagem;
}
/* Fim da validacao imagem */

/* PEGA ID DA ULTIMA CATEGORIA ADICIONADA */
$consulta3 = "SELECT idcategorias FROM categorias ORDER BY idcategorias DESC LIMIT 1";
$con3 = $conn->query($consulta3) or die($conn->error);
 while($dados = $con3->fetch_array()){
                                                                
     $idcate  = $dados["idcategorias"];	
     
    }     
    $idcategorias = $idcate;
/* FIM PEGA ID DA ULTIMA CATEGORIA ADICIONADA */ 
    
    /* ALTERNATICA PARA CADASTRAR OS PRODUTOS
    $sql2 = "INSERT INTO produtos VALUES (default, '$nome', '$valor', '$modelo', '$detalhes', '$idcategorias', '$img')";

	mysqli_query($conn, $sql2) or die ("Erro");
    
     echo $msg = " prod Cadastrado com sucesso!";
    */

    
// inclue a conexao e faz a instancia (padrão) // 
require_once "Produto.Class.php";

    $produtos = new Produtos(); 
	$produtos->nome = $nome;
    $produtos->valor = $valor;
    $produtos->modelo = $modelo;
    $produtos->detalhes = $detalhes;
    $produtos->idcategorias = $idcategorias;
	$produtos->img = $img;
    $produtos->inserir();    	
	
  /* ------------------------- CATEGORIA ------------------------- */  
  
	    
    $msg = "<script>alert('Cadastrado com sucesso!');</script>";

}catch(PDOException $e){
    $msg = "<script>alert('Error, Contate o administrador!');</script>";   
    echo $e->getMessage();
}catch(Exception $e){
    $msg = $e->getMessage();
}



?>

    <?php $title ="Cadastro"; ?>

    <section class="container">

        <?php echo $msg;
        echo "<script>window.location.href='Produto_Form.php'</script>";?>

    </section>
