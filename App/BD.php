<?php


$server = "us-cdbr-east-05.cleardb.net";
$user = "b49fba34879a93";
$pass = "cfea3a75";
$db_name = "heroku_4c66442df93ff8c";


try {
    $conn = new PDO("mysql:host=$server;dbname=$db_name", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Falha de Conexão:" . $e->getMessage();
}
