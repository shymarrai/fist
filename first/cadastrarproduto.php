<?php 

include "header.php";
?>
<?php
if (isset($_POST["cadastrarproduto"])) {
    include_once 'conexao.php';
    
    
	$categoria = $_POST["categoria"];
    $descricao = $_POST["descricao"];
    $quant = $_POST["quant"];
    $preco = $_POST["preco"];
	$imagem = $_FILES["imagem"];
	$destino = "imagemproduto/";
    if (!empty($imagem['name'])) { // verificando se foi passada a imagem caso contrario volta a default.jpg
        $particaodenome = explode(".", $imagem["name"]); //pegando o nome e o tipo da imagem separado em array
        $nome = $particaodenome[0];
        $tipo = $particaodenome[1];
        if ($tipo == "png" || $tipo == "jpg" || $tipo == "JPG" || $tipo == "PNG") {
            $numteste = 1;
            $nometeste = md5($nome);
            while (file_exists("$destino.$nometeste.$tipo")) { // verificando se existe o arquivo na pasta
                $nometeste = $nometeste . "_" . $numteste;
                $numteste++;
            }// tudo OK não existe entao vamos mover a imagem para pasta imagem imagemUsuario
            if (move_uploaded_file($imagem['tmp_name'], $destino . $nometeste . '.' . $tipo)) {
                $completo = $destino . $nometeste . '.' . $tipo;
                $dados = getimagesize($completo);
                $largura = $dados[0];
                $altura = $dados[1];
                if ($tipo == "jpg" || $tipo == "JPG") {
                    $origem = imagecreatefromjpeg($completo);
                } else {// criando imagem  png
                    $origem = imagecreatefrompng($completo);
                }
                $nvLargura = array(96, 46, 150);
                $nvAltura = array((($nvLargura[0] / $largura) * $altura), (($nvLargura[1] / $largura) * $altura), (($nvLargura[2] / $largura) * $altura));
                for ($i = 0; $i <= (count($nvAltura) - 1); $i++) {
                    $saida[$i] = imagecreatetruecolor($nvLargura[$i], $nvAltura[$i]);
                    imagecopyresampled($saida[$i], $origem, 0, 0, 0, 0, $nvLargura[$i], $nvAltura[$i], $largura, $altura);
                }
                if ($tipo == "jpg" || $tipo == "JPG") {
                    $perfil = imagejpeg($saida[0], $destino . 'p-' . $nometeste . '.' . $tipo, 50);
                    $minPerfil = imagejpeg($saida[1], $destino . 'min-p-' . $nometeste . '.' . $tipo, 50);
                    $perfil = imagejpeg($saida[2], $destino . 'per-' . $nometeste . '.' . $tipo, 60);
                    //echo $imagem['tmp_name'];
                } else {
                    $perfil = imagepng($saida[0], $destino . 'p-' . $nometeste . '.' . $tipo, 60);
                    $minPerfil = imagepng($saida[1], $destino . 'min-p-' . $nometeste . '.' . $tipo, 50);
                    $minPerfil = imagepng($saida[2], $destino . 'per-' . $nometeste . '.' . $tipo, 60);
                }
            } else {
                $statusCadastro = 'erro ao enviar a imagem, por favor tente novamente :(';
            }
            $nomeImagem = $nometeste . "." . $tipo;
        } else {
            $statusCadastro = 'Formato de imagem inválido. Tente um tipo jpg ou png.!';
        }
    } 
   
    

    $sql = "INSERT INTO produtos VALUES (null,:categoria, :descricao, :quant, :preco, :imagem);";
    $stmt = $pdo->prepare($sql); //preparando o sql 
    // substituindo os paramentos pelo valor da variavel... efeito parecido com str_replace || vantegem é segurança é claro... evitando o Sql Injector
    $stmt->bindparam(':categoria', $categoria, PDO::PARAM_STR);
    $stmt->bindparam(':descricao', $descricao, PDO::PARAM_STR);
    $stmt->bindparam(':quant', $quant, PDO::PARAM_STR);
    $stmt->bindparam(':preco', $preco, PDO::PARAM_STR);
    $stmt->bindparam(':imagem', $nomeImagem, PDO::PARAM_STR);
    $stmt->execute(); // depois que todos os paramentos substituido. Aperta o play Dj...
    if ($stmt->rowCount() > 0) { // verificando se houve erro no insert 
        $statusCadastro = '<div class="alert alert-success col-md-12"><strong>O Produto ' . $descricao . ' foi cadastrado com sucesso!</strong></div>';
    } else {
        $statusCadastro = '<div class="alert alert-danger col-md-12"><strong>Não foi possível cadastrar o produto ' . $descricao . ', tente novamente!</strong></div>';
    }
}

?>

<section class="container">
<div class="form-group">
<div class="col-md-9 bg">
    <form name="form_contato" action="<?php echo $_SERVER['PHP_SELF']; ?>?pagina=cadastrarproduto" method="POST" id="form_contato" class="form-horizontal"  enctype="multipart/form-data">
        <?php
        if (isset($statusCadastro)) { // se houver erro sera exibido aki com a class = col-md-12 para ficar com design bacana
            echo $statusCadastro;
        }
        ?>
		 
            <fieldset>
                <legend>Cadastramento de Produtos</legend>
            </fieldset>
			<div class="col-md-9">
            <div class="col-md-8 espacamento">
                <label for="categoria">Categoria: <span id="vcategoria" > </span></label>
                <input type="text"  placeholder=" Digite a Categoria do produto" name="categoria"  maxlength="55" id="categoria" class="form-control"   required>
            </div>
		  </div>
		 <div class="col-md-9">
            <div class="col-md-8 espacamento">
                <label for="descricao">Descrição: <span id="vdescricao" > </span></label>
                <input type="text"  placeholder=" Digite a descricao do produto" name="descricao"  maxlength="55" id="descricao" class="form-control"   required>
            </div>
			</div>
			
			<div class="col-md-9">
            <div class="col-md-8 espacamento">
                <label for="quant">Quantidade: <span id="vquant" > </span></label>
                <input type="text"  placeholder=" Digite a quantidade do produto" name="quant"  maxlength="55" id="quant" class="form-control"   required>
            </div>
			</div>
			<div class="col-md-9">
            <div class="col-md-8 espacamento">
                <label for="preco">Preço: <span id="vpreco" > </span></label>
                <input type="text"  placeholder=" Digite a preço do produto" name="preco"  maxlength="55" id="preco" class="form-control"  required>
            </div>
			
		</div>	
        <div class="col-md-9">
            <div class="col-md-8 espacamento">
                <label for="fileUpload">Escolha sua imagem:</label>      
                <input id="fileUpload" type="file" name="imagem"><br />
               
            </div>
        </div>
        
            <div class=" col-md-12 espacamento">
                <input type="submit" value="Cadastrar" name="cadastrarproduto" class="btn btn-primary">
                <input type="reset" value="Apagar" class="btn btn-danger">
            </div>
        </div>
    </form>
</div>
</div>
</section>
<?php 

include "footer.php";
?>