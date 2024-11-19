<?php
try{
    //Connect to the database
    $pdo = new PDO("mysql:host=localhost; dbname=new_db", "root", "");

    $sql = "ALTER TABLE users DROP COLUMN email";

    $pdo->exec($sql);

    echo "Column dropped succesfully";
}catch(PDOException $e){
    echo $e->getMessage();
}
?>