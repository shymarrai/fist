<?php 

class Conn{

private static $local = "localhost";
private static $usuario = "root";
private static $senha = "";
private static $banco = "fist";
private static $conn;	
	
	public static function Connectar(){
		try{
				self::$conn = new PDO("mysql:host=".self::$local.';dbname='.self::$banco,self::$usuario,self::$senha);
		}
	catch(PDOException $e){
		echo "Menssage: ".$e->getMessage();
		die;
	}
	return self::$conn;
	}
public static function getConn(){
	return self::Connectar();
}

}
?>