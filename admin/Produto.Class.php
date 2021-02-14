<?php 

require "Conexao.Class.php";

class Produtos{
    
    public $idprodutos;
	public $nome;
    public $valor;
	public $modelo;
    public $detalhes;
    public $quantidade;
    public $categoriasid;
    
    public $img1;
    public $img2;
    public $img3;
    public $img4;
    
    public $idped;
   
	
    
    public function inserir(){
    
        $pdo = Conexao::conexao();
        $sql = 'Insert into produtos values(default, :nome, :valor, :modelo, :detalhes, :quantidade, :categoriasid, :img1, :img2, :img3, :img4, :idped)';
        $stmt = $pdo->prepare($sql);

        $stmt->execute(array(
        ':nome' => $this->nome,
        ':valor' => $this->valor,
		':modelo' => $this->modelo,
        ':detalhes' => $this->detalhes,
        ':quantidade' => $this->quantidade,
        ':categoriasid' => $this->categoriasid,
        ':img1' => $this->img1,
        ':img2' => $this->img2,
        ':img3' => $this->img3,
        ':img4' => $this->img4,
        ':idped' => $this->idped,

    ));    
}
    
     public function lista(){
        $pdo = Conexao::conexao();
        
        $sql  = "SELECT * FROM produtos;";
        $consulta = $pdo->query($sql);
        $dados = null;
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
            "idprodutos" => $linha['idprodutos'],
            "nome" => $linha['nome'],
            "valor" => $linha['valor'],
			"modelo" => $linha['modelo'],
            "detalhes" => $linha['detalhes'],    
            "quantidade" => $linha['quantidade'],    
            "categoriasid" => $linha['categoriasid'],
            "img1" => $linha['img1'],
            "img2" => $linha['img2'],
            "img3" => $linha['img3'],
            "img4" => $linha['img4'],
            "idped" => $linha['idped'],    
			     
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    
         public function pesquisarProduto($idprodutos){
        $pdo = Conexao::conexao();
        
        $sql = "SELECT * FROM produtos WHERE idprodutos LIKE '" . $idprodutos . "%'";;             
        $consulta = $pdo->query($sql);
        
        if ($consulta->rowCount() > 0) {
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
                $dados[] = array(
                "idprodutos" => $linha['idprodutos'],
                "nome" => $linha['nome'],
                "valor" => $linha['valor'],
                "modelo" => $linha['modelo'],
                "detalhes" => $linha['detalhes'],    
                "quantidade" => $linha['quantidade'],    
                "categoriasid" => $linha['categoriasid'],
                "img1" => $linha['img1'], 
                "img2" => $linha['img2'],
                "img3" => $linha['img3'],
                "img4" => $linha['img4'],
                "idped" => $linha['idped']

                );     
            }
            $pdo = null;
            return $dados;
        }else {
            echo "<span class='alert alert-danger col-md-12'>Nenhum encontrado </span>"; 
        }
    }
    
    public function excluir(){
        $pdo = Conexao::conexao();
        $sql = 'DELETE FROM produtos WHERE idprodutos = :idprodutos';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':idprodutos'=>$this->idprodutos
        ));        
        
    }

    
}
