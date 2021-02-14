<?php 

require "Conexao.Class.php";

class Pedido{
    
    public $idpedido;
	public $datadopedido;
    public $idstatuspedido;
	public $idclien;
  
    }
	
    
    
    public function inserir(){
    
        $pdo = Conexao::conexao();
        $sql = 'Insert into pedido values(default, :idpedido, :datadopeido, :idstatuspedido, :idclien)';
        $stmt = $pdo->prepare($sql);

        $stmt->execute(array(
        ':idpedido' => $this->idpedido,
        ':datadopeido' => $this->datadopedido,
		':idstatuspedido' => $this->idstatuspedido,
        ':idclien' => $this->idclien
       

    ));    
}
    
     public function lista(){
        $pdo = Conexao::conexao();
        
        $sql  = "SELECT * FROM pedido;";
        $consulta = $pdo->query($sql);
        $dados = null;
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
            "idpedido" => $linha['idpedido'],
            "datadopeido" => $linha['datadopedido'],
            "idstatuspedido" => $linha['idstatuspedido'],
			"idclien" => $linha['idclien']
         
			
                  
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    
         public function pesquisarPedido($idpedido){
        $pdo = Conexao::conexao();
        
        $sql = "SELECT * FROM pedido WHERE idpedido like '%$idpedido%'";
        $consulta = $pdo->query($sql);
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
            "idpedido" => $linha['idpedido'],
            "datadopedido" => $linha['datadopedido'],
            "idstatuspedido" => $linha['idstatuspedido'],
			"idclien" => $linha['idclien']
           
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    public function excluir(){
        $pdo = Conexao::conexao();
        $sql = 'DELETE FROM pedido WHERE idpedido = :idpedido';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':idpedido'=>$this->idpedido
        
    }
    
     public function pedidoidoExiste(){
        $pdo = Conexao::conexao();
        $sql = "SELECT * FROM pedido WHERE idpedido = '$this->idpedido'";
        $consulta = $pdo->query($sql);
        $total = $consulta->rowCount();
        
        if($total>0){
            return true;
        }else{
            return false;    
        }
    }
    
}