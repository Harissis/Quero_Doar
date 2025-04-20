<?php
session_start();
$localhost = "localhost";
$user = "root";
$passw = "";
$banco = "login";

try {

    global $pdo;

    $pdo = new PDO("mysql:dbname=" . $banco . ";host=" . $localhost, $user, $passw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $e) {
    ;
    echo "ERROR: " . $e->getMessage();
    exit;

}
;






?>