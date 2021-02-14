<?php 

$hos = 'mysql:host=localhost;dbname=first;charset=utf8';
$usr = 'root';
$pwd = '';
$opcoes = array(

    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
try {
    $pdo = new PDO($hos, $usr, $pwd,$opcoes);
} catch (PDOException $ex) {
    echo "Ocorreu um erro ".$ex->getMessage();
}

?>