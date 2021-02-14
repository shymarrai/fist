<?php 

require "Conexao.Class.php";

class Imagem{
    
    public $idimagem;
	public $img;
    public $idprodutos;
	
	
    
}
    
    
    public function inserir(){
    
        $pdo = Conexao::conexao();
        $sql = 'Insert into imagem values(default, :idimagem, :img, :idprodutos)';
        $stmt = $pdo->prepare($sql);

        $stmt->execute(array(
        ':idimagem' => $this->idimagem,
        ':img' => $this->img,
		':idprodutos' => $this->idprodutos
    ));    
}
    
     public function lista(){
        $pdo = Conexao::conexao();
        
        $sql  = "SELECT * FROM imagem;";
        $consulta = $pdo->query($sql);
        $dados = null;
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
            "idimagem" => $linha['idimagem'],
            "img" => $linha['img'],
            "idprodutos" => $linha['idprodutos']
			                  
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    
         public function pesquisarImagem($idimagem){
        $pdo = Conexao::conexao();
        $sql = "SELECT * FROM imagem WHERE idimagem like '%$idimagem%'";
        $consulta = $pdo->query($sql);
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
              "idimagem" => $linha['idimagem'],
            "img" => $linha['img'],
            "idprodutos" => $linha['idprodutos']   
            );     
        }
        $pdo = null;
        return $dados;
    }
    
        
        }
    }
    
    
    
    
