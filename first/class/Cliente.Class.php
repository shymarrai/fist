<?php 

require_once "Conn.class.php";

class Cliente{
    
    public $idcliente;
	public $nome;
    public $rg;
	public $cpf;
    public $email;
    public $senha;
	public $telefone;	
	public $cep;
	public $endereco;
	public $cidade;
	public $estado;
	

	
    
    public function autenticarcliente(){
        $pdo = Conn::getConn();
        $sql = "SELECT email,senha FROM cliente WHERE email = '$this->email' AND senha ='$this->senha'";
        $consulta = $pdo->query($sql);
        $dados = false;
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados = true;
        }
        return $dados;
    }
    
    
    public function inserircliente(){
    
        $pdo = Conn::getConn();
        $sql = 'Insert into cliente values(default, :nome, :rg, :cpf, :email, :senha, :telefone, :cep, :endereco,  :cidade, :estado)';
        $stmt = $pdo->prepare($sql);

        $stmt->execute(array(
        ':nome' => $this->nome,
        ':rg' => $this->rg,
		':cpf' => $this->cpf,
        ':email' => $this->email,
        ':senha' => $this->senha,
		':telefone' => $this->telefone,
		':cep' => $this->cep,
		':endereco' => $this->endereco,
        ':cidade' => $this->cidade,
		':estado' => $this->estado
    ));    
}
    
     public function listacliente(){
        $pdo = Conn::getConn();
        
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
			"cep" => $linha['cep'],	
			"endereco" => $linha['endereco'],
			"cidade" => $linha['cidade'],
			"estado" => $linha['estado']
                  
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    
         public function pesquisarPorNome($nome){
        $pdo = Conn::getConn();
        
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
			"telefone" => $linha['telefone'],			
			"cep" => $linha['cep'],
			"endereco" => $linha['endereco'],
			"cidade" => $linha['cidade'],
			"estado" => $linha['estado']
               
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    public function excluircliente(){
        $pdo = Conn::getConn();
        $sql = 'DELETE FROM cliente WHERE idcliente = :idcliente';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':idcliente'=>$this->idcliente
        ));        
        
    }
		public function editarcliente(){
			 
		}
	
     public function loginExiste(){
        $pdo = Conn::getConn();
        $sql = "SELECT * FROM cliente WHERE email = '$this->email'";
        $consulta = $pdo->query($sql);
        $total = $consulta->rowCount();
        
        if($total>0){
            return true;
        }else{
            return false;    
        }
    }
    
}
    
    
    
    
