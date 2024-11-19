<?php
try{
//Connect to the database
$pdo = new PDO("mysql:host=localhost; dbname=new_db", "root", "");

$sql = "DROP TABLE users";

$pdo -> exec($sql);

echo "Table dropped succesfully";
}catch(PDOException $e){
    echo $e->getMessage();
}
?>