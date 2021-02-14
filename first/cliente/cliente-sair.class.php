<?php

    session_start();
    
    if(isset($_SESSION['cliente'])){
    // se você possui algum cookie relacionado com o login deve ser removido, nao deixando residuos...
    session_destroy();
    header("Location: /");
    exit();
}

?>
