<?php

    session_start();
    
    if(isset($_SESSION['login'])){
    // se você possui algum cookie relacionado com o login deve ser removido, nao deixando residuos...    
    session_destroy(); 
    header("Location: login.php");
    exit();
}

?>
