<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'product_managment';

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error){
    echo "Connection failed! .$conn->connect_error";
}

?>