<?php require 'authentication.php'; require 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Reservation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Edit Reservation</h2>
        <?php
        if (isset($_GET['id'])) {
            $stmt = $pdo->prepare("SELECT * FROM reservations WHERE id = ?");
            $stmt->execute([$_GET['id']]);
            $room = $stmt->fetch();
        }
        if (isset($_POST['edit'])) {
            $stmt = $pdo->prepare("UPDATE reservations SET room_number=?, status=? WHERE id=?");
            $stmt->execute([$_POST['room_number'], $_POST['status'], $_POST['id']]);
            header('Location: dashboard.php');
            exit();
        }
        ?>
        <form method="POST">
            <input type="hidden" name="id" value="<?= $room['id'] ?>">
            <input type="text" name="room_number" value="<?= $room['room_number'] ?>" required>
            <input type="text" name="status" value="<?= $room['status'] ?>" required>
            <button type="submit" name="edit">Update</button>
        </form>
    </div>
</body>
</html>