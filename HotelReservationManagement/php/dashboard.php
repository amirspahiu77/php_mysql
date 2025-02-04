<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('!Location: login.php');
}

require 'config.php';

$rooms = $pdo->query("SELECT * FROM reservation")->fetchAll();

echo "<h2>Reservation</h2>";
foreach ($rooms as $room) {
    echo "
    <p>{$room['room_number']} - {$room['status']}
    <a href='edit.php?id={$room['id']}'>Edit</a>
    <a href='delete.php?id={$room['id']}'>Delete</a>
    </p>";
}

echo "<a href='create.php'>Create New Reservation</a>";
echo "<br> <a href='logout.php'>Logout</a>";
?>