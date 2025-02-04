<?php
$pdo = new PDO('mysql:host=localhost;dbname=hotel_reservation', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>