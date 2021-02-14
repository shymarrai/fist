<?php 

require "Conexao.Class.php";

class Venda{
    
    public $idvenda;
	public $totvenda;
    public $frete;
    public $idcli;
    public $idu;
    public $pedidoid;
	
    
    public function inserir(){
    
        $pdo = Conexao::conexao();
        /*$sql = 'Insert into venda values(default, :totvenda, :frete, :idcli, :idu, :pedidoid)';*/
        
        $sql = 'Insert into venda values(default, null, null, :idcli, :idu, :pedidoid)';
        $stmt = $pdo->prepare($sql);

        $stmt->execute(array(
        //':totvenda' => $this->totvenda,
		//':frete' => $this->frete,        
        ':idcli' => $this->idcli,
		':idu' => $this->idu,
        ':pedidoid' => $this->pedidoid

    ));    
}
    
     public function lista(){
        $pdo = Conexao::conexao();
        
        $sql  = "SELECT * FROM venda;";
        $consulta = $pdo->query($sql);
        $dados = null;
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
            "idvenda" => $linha['idvenda'],
            "totvenda" => $linha['totvenda'],
            "frete" => $linha['frete'],			
            "idcli" => $linha['idcli'],    
            "idu" => $linha['idu'],
            "pedidoid" => $linha['pedidoid']
                
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    
         public function pesquisarPorNome($idvenda){
        $pdo = Conexao::conexao();
        
        $sql = "SELECT * FROM venda WHERE idvenda like'" . $idvenda . "%'";
        $consulta = $pdo->query($sql);
        
        if ($consulta->rowCount() > 0) {  
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
                $dados[] = array(
                "idvenda" => $linha['idvenda'],
                "totvenda" => $linha['totvenda'],
                "frete" => $linha['frete'],                
                "didcli" => $linha['idcli'],    
                "idu" => $linha['idu'],
                "pedidoid" => $linha['pedidoid']

                );     
            }
            $pdo = null;
            return $dados;
        }else {
            echo "<span class='alert alert-danger col-md-12'>Nenhum encontrado!</span>"; 
            } 
    }
    
    public function excluir(){
        $pdo = Conexao::conexao();
        $sql = 'DELETE FROM venda WHERE idvenda = :idvenda';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':idvenda'=>$this->idvenda
        ));        
        
    }
}
