<?php
$host = "localhost";
$dbname = "pct_db";
$admin  = "root"; 
$pass = "";

try{

    $pdo= new PDO("mysql:host=$host;dbname=$dbname", $admin, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die(print_r("erreur bdd:".$e->getMessage()));
}