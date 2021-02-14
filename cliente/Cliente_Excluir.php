<?php 
require_once "header.php";
require_once "../class/Cliente.Class.php";
include_once("conexao.php");
session_start();
	$cliente = new Cliente();
	$info = $cliente->listacliente($_SESSION['cliente']);
	$idcliente = $info[0]['idcliente'];
  
    $cliente->idcliente = $idcliente;
    $cliente->excluircliente();
    
    $msg = "alert('Excluido com sucesso!";

	 session_destroy();
    exit();
require_once "footer.php";
?>