<?php

$localhost = 'localhost';
$database = 'opensource_t9;';
$username = 'root';
$password = 'secret';

try{

    $dsn = "mysql:host=$localhost;dbname=$database";
    $conn = new PDO($dsn,$username,$password);



}catch (PDOException $e){
    die('Connection has a problem ' . $e->getMessage());

}
