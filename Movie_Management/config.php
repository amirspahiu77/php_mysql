<?php

$user = 'root';
$password = '';
$server = 'localhouse';
$dbname = 'mms';

try{
    $conn = new PDO ("mysql:host=$server;dbname=$dbname", $user, $password);
}
catch (PDOException $e){
    echo "Error". $e->getMessage();
}

?>