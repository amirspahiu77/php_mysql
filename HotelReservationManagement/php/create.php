<?php require 'authentication.php'; require 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Reservation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Create New Reservation</h2>
        <?php
        if (isset($_POST['create'])) {
            $stmt = $pdo->prepare("INSERT INTO reservations (room_number, status) VALUES (?, ?)");
            $stmt->execute([$_POST['room_number'], $_POST['status']]);
            header('Location: dashboard.php');
            exit();
        }
        ?>
        <form method="POST">
            <input type="text" name="room_number" placeholder="Room Number" required>
            <input type="text" name="status" placeholder="Status (Booked/Available)" required>
            <button class="btncreate" type="submit" name="create">Create</button>
        </form>
    </div>
</body>
</html>