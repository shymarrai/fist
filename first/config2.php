<?php
try {
    $host = 'localhost';
    $dbnm = 'first';
    $user = 'root';
    $pass = '';
    $dbh = new PDO('mysql:host='.$host.';dbname='.$dbnm, $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>