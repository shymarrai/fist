<?php 

require "Conexao.Class.php";

class statusPedido{
    
    public $idstatuspedido;
	public $descricaostatus;
    public $datavalida;
	
	
    
    
    
    public function inserir(){
    
        $pdo = Conexao::conexao();
        $sql = 'Insert into statuspedido values(default, :idstatuspedido, :descricaostatus, :datavalida)';
        $stmt = $pdo->prepare($sql);

        $stmt->execute(array(
        ':idstatuspedido' => $this->idstatuspedido,
        ':descricaostatus' => $this->descricaostatus,
		':datavalida' => $this->datavalida
    ));    
}
    
     public function lista(){
        $pdo = Conexao::conexao();
        
        $sql  = "SELECT * FROM statuspedido;";
        $consulta = $pdo->query($sql);
        $dados = null;
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
            "idstatuspedido" => $linha['idstatuspedido'],
            "descricaostatus" => $linha['descricaostatus'],
            "datavalida" => $linha['datavalida']
			   
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    
         public function pesquisarStatus($idstatuspedido){
        $pdo = Conexao::conexao();
        
        $sql = "SELECT * FROM statuspedido WHERE idstatuspedido like '%$idstatuspedido%'";
        $consulta = $pdo->query($sql);
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
              "idstatuspedido" => $linha['idstatuspedido'],
            "descricaostatus" => $linha['descricaostatus'],
            "datavalida" => $linha['datavalida']
               
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    public function excluir(){
        $pdo = Conexao::conexao();
        $sql = 'DELETE FROM statuspedido WHERE idstatuspedido = :idstatuspedido';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':idcliente'=>$this->idcliente
        ));        
        
    }
    
    
}
    
    
    
    
