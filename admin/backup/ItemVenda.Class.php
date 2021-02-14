<?php 

require "Conexao.Class.php";

class ItemVenda{
    
    public $iditemvenda;
    public $datavenda;
	public $prazo;
    public $idpedi;
	
    
    
    public function inserir(){
    
        $pdo = Conexao::conexao();
        $sql = 'Insert into itemvenda values(default, :datavenda, :prazo, :idpedi)';
        $stmt = $pdo->prepare($sql);

        $stmt->execute(array(
        ':datavenda' => $this->datavenda,
		':prazo' => $this->prazo,
        ':idpedi' => $this->idpedi
             

    ));    
}
    
     public function lista(){
        $pdo = Conexao::conexao();
        
        $sql  = "SELECT * FROM itemvenda";
        $consulta = $pdo->query($sql);
        $dados = null;
         
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
    
    
         public function pesquisarPorNome($iditemvenda){
        $pdo = Conexao::conexao();
        
        $sql = "SELECT * FROM itemvenda WHERE iditemvenda like '" . $iditemvenda . "%'";
        $consulta = $pdo->query($sql);
        
        if ($consulta->rowCount() > 0) {
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
                $dados[] = array(
                "iditemvenda" => $linha['iditemvenda'],                
                "datavenda" => $linha['datavenda'],
                "prazo" => $linha['prazo'],
                "idpedi" => $linha['idpedi']

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
        $sql = 'DELETE FROM itemvenda WHERE iditemvenda = :iditemvenda';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':iditemvenda'=>$this->iditemvenda
        ));        
        
    }
    
}
