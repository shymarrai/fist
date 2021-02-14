<?php 

require "Conexao.Class.php";

class Venda{
    
    public $idvenda;
	public $totvenda;
    public $frete;
	public $iditemv;
    public $idcli;
    public $idu;
    }
	
    
    
    public function inserir(){
    
        $pdo = Conexao::conexao();
        $sql = 'Insert into venda values(default, :idvenda, :totvenda, :frete, :iditemv, :idcli, :idu)';
        $stmt = $pdo->prepare($sql);

        $stmt->execute(array(
        ':idvenda' => $this->idvenda,
        ':totvenda' => $this->totvenda,
		':frete' => $this->frete,
        ':iditemv' => $this->iditemv,
        ':idcli' => $this->idcli,
		':idu' => $this->idu

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
			"iditemv" => $linha['iditemv'],
            "idcli" => $linha['idcli'],    
            "idu" => $linha['idu']

			
                  
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    
         public function pesquisarPorNome($nome){
        $pdo = Conexao::conexao();
        
        $sql = "SELECT * FROM venda WHERE idvenda like '%$idvenda%'";
        $consulta = $pdo->query($sql);
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
            "idvenda" => $linha['idvenda'],
            "totvenda" => $linha['totvenda'],
            "frete" => $linha['frete'],
			"iditemv" => $linha['iditemv'],
            "didcli" => $linha['idcli'],    
            "idu" => $linha['idu']
			 
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    public function excluir(){
        $pdo = Conexao::conexao();
        $sql = 'DELETE FROM venda WHERE idvenda = :idvenda';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':idvenda'=>$this->idvenda
        ));        
        
    }
    
     public function prodExiste(){
        $pdo = Conexao::conexao();
        $sql = "SELECT * FROM venda WHERE idvenda = '$this->idvenda'";
        $consulta = $pdo->query($sql);
        $total = $consulta->rowCount();
        
        if($total>0){
            return true;
        }else{
            return false;    
        }
    }
    
}