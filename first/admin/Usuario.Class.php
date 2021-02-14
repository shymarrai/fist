<?php 

require "Conexao.Class.php";

class Usuario{
    
    public $idusuario;
	public $nome;
    public $rg;
	public $cpf;
    public $email;
    public $login;
    public $senha;
	public $telefone;
	public $endereco;
	public $nivel;
    
    public function autenticarUsuario(){
        $pdo = Conexao::conexao();
        $sql = "SELECT login,senha FROM usuario WHERE login = '$this->login' AND senha ='$this->senha'";
        $consulta = $pdo->query($sql);
        $dados = false;
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados = true;
        }
        return $dados;
    }
    
    
    public function inserir(){
    
        $pdo = Conexao::conexao();
        $sql = 'Insert into usuario values(default, :nome, :rg, :cpf, :email, :login, :senha, :telefone, :endereco, :nivel)';
        $stmt = $pdo->prepare($sql);

        $stmt->execute(array(
        ':nome' => $this->nome,
        ':rg' => $this->rg,
		':cpf' => $this->cpf,
        ':email' => $this->email,
        ':login' => $this->login,
        ':senha' => $this->senha,
		':telefone' => $this->telefone,
		':endereco' => $this->endereco,
		':nivel' => $this->nivel
		
         
    ));    
}
    
     public function lista(){
        $pdo = Conexao::conexao();
        
        $sql  = "SELECT * FROM usuario;";
        $consulta = $pdo->query($sql);
        $dados = null;
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
            "idusuario" => $linha['idusuario'],
            "nome" => $linha['nome'],
            "rg" => $linha['rg'],
			"cpf" => $linha['cpf'],
            "email" => $linha['email'],    
            "login" => $linha['login'],    
            "senha" => $linha['senha'],
			"telefone" => $linha['telefone'],
			"endereco" => $linha['endereco'],
			"nivel" => $linha['nivel']
                  
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    
         public function pesquisarPorNome($nome){
        $pdo = Conexao::conexao();
        
        $sql = "SELECT * FROM usuario WHERE nome like '%$nome%'";
        $consulta = $pdo->query($sql);
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
                "idusuario" => $linha['idusuario'],
                "nome" => $linha['nome'],
				"rg" => $linha['rg'],
				"cpf" => $linha['cpf'],
				"email" => $linha['email'],    
				"login" => $linha['login'],    
				"senha" => $linha['senha'],
				"telefone" => $linha['telefone'],
				"endereco" => $linha['endereco'],
				"nivel" => $linha['nivel']
               
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    public function excluir(){
        $pdo = Conexao::conexao();
        $sql = 'DELETE FROM usuario WHERE idusuario = :idusuario';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':idusuario'=>$this->idusuario
        ));        
        
    }
    
     public function loginExiste(){
        $pdo = Conexao::conexao();
        $sql = "SELECT * FROM usuario WHERE login = '$this->login' AND email = '$this->email'";
        $consulta = $pdo->query($sql);
        $total = $consulta->rowCount();
        
        if($total>0){
            return true;
        }else{
            return false;    
        }
    }
    
}
