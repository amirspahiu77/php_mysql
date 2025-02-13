<?php require 'authentication.php'; require 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Reservations</h2>
        <?php
        $rooms = $pdo->query("SELECT * FROM reservations")->fetchAll();
        foreach ($rooms as $room) {
            echo "<p>{$room['room_number']} - {$room['status']} <a href='edit.php?id={$room['id']}'>Edit</a> | <a href='delete.php?id={$room['id']}'>Delete</a> </p>";
        }
        ?>
        <a href="create.php" class="button">Create New Reservation</a>
        <br><br>
        <a href="logout.php" class="button">Logout</a>
    </div>
</body>
</html>

