<?php 

$host = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=localhost;dbname=dbbookstore;", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    
} catch(PDOException $e) {
    echo "Databas connect error: ".$e->getMessage();
}