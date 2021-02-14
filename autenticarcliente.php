 <?php
    session_start();
    require_once "class/Cliente.Class.php";
    
    try{
    
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $cliente = new Cliente();
        $cliente->email = $email;
        $cliente->senha = $senha;
        
        if(!$cliente->autenticarcliente()) throw new Exception("<script>alert('Cliente Inválido!');
		
		window.location='index.php'
		</script>");
        
        $msg = "<script>alert('Cliente Autenticado!');</script>";
        $_SESSION['cliente'] = $cliente->email;
        header("location: cliente/index.php");
     
    }catch(Exception $e){
        $msg = $e->getMessage();
    }

?>

<?php echo $msg; ?>