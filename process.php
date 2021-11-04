<?php
session_start();

require_once 'connection.php';
require_once 'link.php';

try{
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
    
    
        $sql = "INSERT INTO loginuser(username,password) VALUES('$username','$password')";
    
        $conn->exec($sql);

        echo "<div class='bg-green-100 rounded-lg p-4 mb-4 text-lg text-green-700 text-center' role='alert'>Successfull data saved</div>";
    }

    // header('Location: index.php');
}catch (PDOException $e){
    die("<div class='bg-red-100 rounded-lg p-4 mb-4 text-lg text-green-700 text-center' role='alert'>Data not saved</div>" . $e->getMessage());
}
