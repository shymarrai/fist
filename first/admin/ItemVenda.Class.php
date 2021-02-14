<?php 

require "Conexao.Class.php";

class ItemVenda{
    
    public $iditemvenda;
	public $idpedi;
    public $datavenda;
	public $prazo;
    }
	
    
    
    public function inserir(){
    
        $pdo = Conexao::conexao();
        $sql = 'Insert into itemvenda values(default, :idpedi, :datavenda, :prazo, :idprod)';
        $stmt = $pdo->prepare($sql);

        $stmt->execute(array(
        ':iditemvenda' => $this->iditemvenda,
        ':datavenda' => $this->datavenda,
		':prazo' => $this->prazo
       

    ));    
}
    
     public function lista(){
        $pdo = Conexao::conexao();
        
        $sql  = "SELECT * FROM itemvenda;";
        $consulta = $pdo->query($sql);
        $dados = null;
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
            "iditempedido" => $linha['iditemvenda'],
            "idpedi" => $linha['idpedi'],
            "datavenda" => $linha['datavenda'],
			"prazo" => $linha['prazo']
            
   
			
                  
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    
         public function pesquisarPorNome($id){
        $pdo = Conexao::conexao();
        
        $sql = "SELECT * FROM itemvenda WHERE login like '%$iditemvenda%'";
        $consulta = $pdo->query($sql);
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
            "iditemvenda" => $linha['iditemvenda'],
            "idpedi" => $linha['idpedi'],
            "datavenda" => $linha['datavenda'],
			"prazo" => $linha['prazo']
               
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    public function excluir(){
        $pdo = Conexao::conexao();
        $sql = 'DELETE FROM itempedido WHERE iditemvenda = :iditemvenda';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':iditemvenda'=>$this->iditemvenda
        ));        
        
    }
    
     public function itemvExiste(){
        $pdo = Conexao::conexao();
        $sql = "SELECT * FROM itempedido WHERE iditemvenda = '$this->iditemvenda'";
        $consulta = $pdo->query($sql);
        $total = $consulta->rowCount();
        
        if($total>0){
            return true;
        }else{
            return false;    
        }
    }
    
}