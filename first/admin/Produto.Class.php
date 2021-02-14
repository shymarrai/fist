<?php 

require "Conexao.Class.php";

class Produtos{
    
    public $idprodutos;
	public $nome;
    public $valor;
	public $modelo;
    public $detalhes;
    public $idcategorias;
   
	
    
    public function inserir(){
    
        $pdo = Conexao::conexao();
        $sql = 'Insert into produtos values(default, :nome, :valor, :modelo, :detalhes, :idcategorias)';
        $stmt = $pdo->prepare($sql);

        $stmt->execute(array(
        ':nome' => $this->nome,
        ':valor' => $this->valor,
		':modelo' => $this->modelo,
        ':detalhes' => $this->detalhes,
        ':idcategorias' => $this->idcategorias		

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
			
                  
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    
         public function pesquisarProduto($nome){
        $pdo = Conexao::conexao();
        
        $sql = "SELECT * FROM produtos WHERE nome like '%$nome%'";
        $consulta = $pdo->query($sql);
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
            "idprodutos" => $linha['idprodutos'],
            "nome" => $linha['nome'],
            "valor" => $linha['valor'],
			"modelo" => $linha['modelo'],
            "detalhes" => $linha['detalhes'],    
            "idcategorias" => $linha['idcategorias']
			 
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    public function excluir(){
        $pdo = Conexao::conexao();
        $sql = 'DELETE FROM produtos WHERE idprodutos = :idprodutos';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':idprodutos'=>$this->idprodutos
        ));        
        
    }
    
     public function prodExiste(){
        $pdo = Conexao::conexao();
        $sql = "SELECT * FROM produtos WHERE nome = '$this->nome'";
        $consulta = $pdo->query($sql);
        $total = $consulta->rowCount();
        
        if($total>0){
            return true;
        }else{
            return false;    
        }
    }
    
}
