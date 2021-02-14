<?php
    session_start();
    require "Usuario.Class.php";
    
    try{
    
        $login = $_POST['login'];
        $senha =  $_POST["senha"];
		//$senha = $_POST["senha"];
        
        $usuario = new Usuario();
        $usuario->login = $login;
        $usuario->senha = $senha;
        
        if(!$usuario->autenticarUsuario()){
            throw new Exception($msg = "<script>alert('Dados Incorretos, tente novamente!');</script>");            
            }else{            
                $_SESSION['login'] = $usuario->login;                
                $msg = ""; 
              // $msg = "<script>alert('Usuário Autenticado!');</script>"; 
            
        }
        
    }catch(Exception $e){
        $msg = $e->getMessage();
    }
?>

    <?php
          
        echo $msg; 
            
        if($msg == "<script>alert('Dados Incorretos, tente novamente!');</script>")  {
            echo "<script>window.location.href='login.php'</script>"; //redimensiona para a pagina - login
        }
            echo "<script>window.location.href='index.php'</script>"; //redimensiona para a pagina - index
    ?>
