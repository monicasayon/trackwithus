<?php
$servername ='localhost';
$username ='root';
$password ='';

try{
    $conn = new PDO("mysql:host=$servername;dbname=inventory", $username, $password);

    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Succesfuly.";
} catch(\Exception $e){
    $error_message = $e->getMessage();
}

// $conn = new mysqli($servername,$username,$password,$dbname);
// if ($conn->connect_error){
//     die("Connection Failed: ".$conn->connect_error);
// }

?> 