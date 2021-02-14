<?php 

require "Conexao.Class.php";

class Produtos{
    
    public $idprodutos;
	public $nome;
    public $valor;
	public $modelo;
    public $detalhes;
    public $idcategorias;
    public $img;
   
	
    
    public function inserir(){
    
        $pdo = Conexao::conexao();
        $sql = 'Insert into produtos values(default, :nome, :valor, :modelo, :detalhes, :idcategorias, :img)';
        $stmt = $pdo->prepare($sql);

        $stmt->execute(array(
        ':nome' => $this->nome,
        ':valor' => $this->valor,
		':modelo' => $this->modelo,
        ':detalhes' => $this->detalhes,
        ':idcategorias' => $this->idcategorias,
        ':img' => $this->img,

    ));    
}
    
     public function lista(){
        $pdo = Conexao::conexao();
        
        $sql  = "SELECT * FROM produtos;";
        $consulta = $pdo->query($sql);
        $dados = null;
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
            "idprodutos" => $linha['idprodutos'],
            "nome" => $linha['nome'],
            "valor" => $linha['valor'],
			"modelo" => $linha['modelo'],
            "detalhes" => $linha['detalhes'],    
            "idcategorias" => $linha['idcategorias'],
            "img" => $linha['img'],
			
                  
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    
         public function pesquisarProduto($idprodutos){
        $pdo = Conexao::conexao();
        
        $sql = "SELECT * FROM produtos WHERE idprodutos LIKE '" . $idprodutos . "%'";;             
        $consulta = $pdo->query($sql);
        
        if ($consulta->rowCount() > 0) {
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
                $dados[] = array(
                "idprodutos" => $linha['idprodutos'],
                "nome" => $linha['nome'],
                "valor" => $linha['valor'],
                "modelo" => $linha['modelo'],
                "detalhes" => $linha['detalhes'],    
                "idcategorias" => $linha['idcategorias'],
                "img" => $linha['img']

                );     
            }
            $pdo = null;
            return $dados;
        }else {
            echo "<span class='alert alert-danger col-md-12'>Nenhum encontrado </span>"; 
        }
    }
    
    public function excluir(){
        $pdo = Conexao::conexao();
        $sql = 'DELETE FROM produtos WHERE idprodutos = :idprodutos';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':idprodutos'=>$this->idprodutos
        ));        
        
    }

    
}
