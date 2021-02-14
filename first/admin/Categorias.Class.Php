<?php 

require "Conexao.Class.php";

class Categorias{
    
    public $idcategorias;
	public $nome;
    public $descricao;
    public $marca;
  
	

    public function inserir(){
    
        $pdo = Conexao::conexao();
        $sql = 'Insert into categorias values(default, :nome, :descricao, :marca)';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
        ':nome' => $this->nome,
        ':descricao' => $this->descricao,
        ':marca' => $this->marca
       

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
            "descricao" => $linha['descricao'],			
            "marca" => $linha['marca']    
      
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
            "descricao" => $linha['descricao'],
            "marca" => $linha['marca']
               
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
    
     public function catExiste(){
        $pdo = Conexao::conexao();
        $sql = "SELECT * FROM categorias WHERE nome = '$this->nome'";
        $consulta = $pdo->query($sql);
        $total = $consulta->rowCount();
        
        if($total>0){
            return true;
        }else{
            return false;    
        }
    }
    
}
