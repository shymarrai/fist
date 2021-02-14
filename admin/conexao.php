<?php

try {
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $dbname = "fist";        

        $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
        
    
	} catch (PDOException $e) {
        echo "Error!: " . $e->getMessage() . "<br/>";
        die();
    	}	
?>
