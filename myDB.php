<?php
    $server = 'localhost';
    $username = 'root';
    $password = 'codio';
    $database = 'websitedb';

try{
    $conn = new 
PDO("mysql:host=$server;dbname=$database", $username, $password);
    
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       //echo 'DB conn successfull';
    
}catch(PDOException $e){
    echo "DB conn failed".$e ->getMessage();
}
?>

