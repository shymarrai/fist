<?php 

require "Conexao.Class.php";

class Cliente{
    
    public $idcliente;
	public $nome;
    public $rg;
	public $cpf;
    public $email;
    public $senha;
	public $telefone;
	public $endereco;
	public $cep;
	public $cidade;
	public $estado;
	

    public function inserir(){
    
        $pdo = Conexao::conexao();
        $sql = 'Insert into cliente values(default, :nome, :rg, :cpf, :email, :senha, :telefone, :endereco, :cep, :cidade, :estado)';
        $stmt = $pdo->prepare($sql);

        $stmt->execute(array(
        ':nome' => $this->nome,
        ':rg' => $this->rg,
		':cpf' => $this->cpf,
        ':email' => $this->email,
        ':senha' => $this->senha,
		':telefone' => $this->telefone,
		':endereco' => $this->endereco,
		':cep' => $this->cep,
         ':cidade' => $this->cidade,
		 ':estado' => $this->estado
    ));    
}
    
     public function lista(){
        $pdo = Conexao::conexao();
        
        $sql  = "SELECT * FROM cliente;";
        $consulta = $pdo->query($sql);
        $dados = null;
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
            "idcliente" => $linha['idcliente'],
            "nome" => $linha['nome'],
            "rg" => $linha['rg'],
			"cpf" => $linha['cpf'],
            "email" => $linha['email'],    
            "senha" => $linha['senha'],
			"telefone" => $linha['telefone'],
			"endereco" => $linha['endereco'],
			"cep" => $linha['cep'],
			"cidade" => $linha['cidade'],
			"estado" => $linha['estado']
                  
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    
         public function pesquisarPorNome($nome){
        $pdo = Conexao::conexao();
        
        $sql = "SELECT * FROM cliente WHERE nome like '%$nome%'";
        $consulta = $pdo->query($sql);
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
              "idcliente" => $linha['idcliente'],
            "nome" => $linha['nome'],
            "rg" => $linha['rg'],
			"cpf" => $linha['cpf'],
            "email" => $linha['email'],        
            "senha" => $linha['senha'],
			"cep" => $linha['cep'],
			"telefone" => $linha['telefone'],
			"endereco" => $linha['endereco'],
			"cidade" => $linha['cidade'],
			"estado" => $linha['estado']
               
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    public function excluir(){
        $pdo = Conexao::conexao();
        $sql = 'DELETE FROM cliente WHERE idcliente = :idcliente';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':idcliente'=>$this->idcliente
        ));        
        
    }
    
    
}
