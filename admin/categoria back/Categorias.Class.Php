<?php 

require "Conexao.Class.php";

class Categorias{
    
    public $idcategorias;
	public $nomecat;
    public $marca;
    public $colecao;
  
	

    public function inserir(){
    
        $pdo = Conexao::conexao();
        $sql = 'Insert into categorias values(default, :nome, :marca, :colecao)';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
        ':nome' => $this->nome,
        ':marca' => $this->marca,
        ':colecao' => $this->colecao
       
    ));    
}
    
     public function lista(){
        $pdo = Conexao::conexao();
        
        $sql  = "SELECT * FROM categorias;";
        $consulta = $pdo->query($sql);
        $dados = null;
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
            "idcategorias" => $linha['idcategorias'],
            "nome" => $linha['nome'],	
            "marca" => $linha['marca'],
            "colecao" => $linha['colecao']
      
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    
         public function pesquisarCategorias($nome){
        $pdo = Conexao::conexao();
        
        $sql = "SELECT * FROM categorias WHERE nome like '%$nome%'";
        $consulta = $pdo->query($sql);
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
            "idcategorias" => $linha['idcategorias'],
            "nome" => $linha['nome'],            
            "marca" => $linha['marca'],
            "colecao" => $linha['colecao']
               
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    public function excluir(){
        $pdo = Conexao::conexao();
        $sql = 'DELETE FROM categorias WHERE idcategorias = :idcategorias';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':idcategorias'=>$this->idcategorias
        ));        
        
    }
    
}
