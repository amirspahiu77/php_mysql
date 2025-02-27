<?php 
require 'authentication.php'; 
require 'config.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Reservation</title>
    <link rel="stylesheet" href="createstyle.css">
</head>
<body>
    <div class="form-container">
        <h2>Create New Reservation</h2>
        <?php
        if (isset($_POST['create'])) {
            $room_number = htmlspecialchars($_POST['room_number']);
            $status = htmlspecialchars($_POST['status']);

            if (!empty($room_number) && !empty($status)) {
                $stmt = $pdo->prepare("INSERT INTO reservations (room_number, status) VALUES (?, ?)");
                if ($stmt->execute([$room_number, $status])) {
                    echo "<p class='success'>Reservation created successfully!</p>";
                } else {
                    echo "<p class='error'>Error creating reservation.</p>";
                }
            } else {
                echo "<p class='error'>All fields are required!</p>";
            }
        }
        ?>
        <form method="POST">
            <input type="text" name="room_number" placeholder="Enter Room Number" required>
            <select name="status" required>
                <option value="">Select Status</option>
                <option value="Booked">Booked</option>
                <option value="Available">Available</option>
            </select>
            <button class="btn-create" type="submit" name="create">Create Reservation</button>
        </form>
        <a href="dashboard.php" class="back-btn">Back to Dashboard</a>
    </div>
</body>
</html>
