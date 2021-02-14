<?php 

require "Conexao.Class.php";

class ItemPedido{
    
    public $iditempedido;
	public $qtd;
    public $valor;
	public $idpedi;
    public $idprod;
    
    public function inserir(){
    
        $pdo = Conexao::conexao();
        $sql = 'Insert into itempedido values(default, :qtd, :valor, :idpedi, :idprod)';
        $stmt = $pdo->prepare($sql);

        $stmt->execute(array(
        ':qtd' => $this->qtd,    
        ':valor' => $this->valor,
		':idpedi' => $this->idpedi,
        ':idprod' => $this->idprod

    ));    
}
    
     public function lista(){
        $pdo = Conexao::conexao();
        
        $sql  = "SELECT * FROM itempedido";
        $consulta = $pdo->query($sql);
        $dados = null;
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
            "iditempedido" => $linha['iditempedido'],
            "qtd" => $linha['qtd'],
            "valor" => $linha['valor'],
			"idpedi" => $linha['idpedi'],
            "idprod" => $linha['idprod']   
   			                  
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    
         public function pesquisarItemPedido($iditempedido){
        $pdo = Conexao::conexao();
        
        $sql = "SELECT * FROM itempedido WHERE iditempedido like '" . $iditempedido . "%'";
        
        $consulta = $pdo->query($sql);
        
        if ($consulta->rowCount() > 0) {
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
                $dados[] = array(
                "iditempedido" => $linha['iditempedido'],
                "qtd" => $linha['qtd'],
                "valor" => $linha['valor'],
                "idpedi" => $linha['idpedi'],
                "idprod" => $linha['idprod']

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
        $sql = 'DELETE FROM itempedido WHERE iditempedido = :iditempedido';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':iditempedido'=>$this->iditempedido
        ));        
        
    }
    
}
