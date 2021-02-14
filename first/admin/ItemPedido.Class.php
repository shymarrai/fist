<?php 

require "Conexao.Class.php";

class ItemPedido{
    
    public $iditempedido;
	public $qtd;
    public $valor;
	public $idped;
    public $idprod;
    }
	
    
    
    public function inserir(){
    
        $pdo = Conexao::conexao();
        $sql = 'Insert into itempedido values(default, :iditempedido, :qtd, :valor, :idped, :idprod)';
        $stmt = $pdo->prepare($sql);

        $stmt->execute(array(
        ':iditempedido' => $this->iditempedido,
        ':valor' => $this->valor,
		':idped' => $this->idped,
        ':idprod' => $this->idprod

    ));    
}
    
     public function lista(){
        $pdo = Conexao::conexao();
        
        $sql  = "SELECT * FROM itempedido;";
        $consulta = $pdo->query($sql);
        $dados = null;
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
            "iditempedido" => $linha['iditempedido'],
            "qtd" => $linha['qtd'],
            "valor" => $linha['valor'],
			"idped" => $linha['idped'],
            "idprod" => $linha['idprod']   
   
			
                  
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    
         public function pesquisarItemPedido($iditempedido){
        $pdo = Conexao::conexao();
        
        $sql = "SELECT * FROM itempedido WHERE iditempedido like '%$iditempedido%'";
        $consulta = $pdo->query($sql);
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
            "idprodutos" => $linha['idprodutos'],
            "nome" => $linha['nome'],
            "valor" => $linha['valor'],
			"idped" => $linha['idped'],
            "idprod" => $linha['idprod']
               
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    public function excluir(){
        $pdo = Conexao::conexao();
        $sql = 'DELETE FROM itempedido WHERE iditempedido = :iditempedido';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':iditempedido'=>$this->iditempedido
        ));        
        
    }
    
     public function itempedExiste(){
        $pdo = Conexao::conexao();
        $sql = "SELECT * FROM itempedido WHERE iditempedido = '$this->iditempedido'";
        $consulta = $pdo->query($sql);
        $total = $consulta->rowCount();
        
        if($total>0){
            return true;
        }else{
            return false;    
        }
    }
    
}