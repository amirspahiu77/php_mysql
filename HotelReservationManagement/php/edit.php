<?php 
require 'authentication.php'; 
require 'config.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: dashboard.php");
    exit();
}

$reservation_id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM reservations WHERE id = ?");
$stmt->execute([$reservation_id]);
$reservation = $stmt->fetch();

if (!$reservation) {
    header("Location: dashboard.php");
    exit();
}

if (isset($_POST['edit'])) {
    $room_number = trim($_POST['room_number']);
    $status = $_POST['status'];

    $stmt = $pdo->prepare("UPDATE reservations SET room_number = ?, status = ? WHERE id = ?");
    if ($stmt->execute([$room_number, $status, $reservation_id])) {
        echo "<p class='success'>Reservation updated successfully. Redirecting...</p>";
        header("refresh:2;url=dashboard.php");
        exit();
    } else {
        echo "<p class='error'>Failed to update reservation. Try again.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Reservation</title>
    <link rel="stylesheet" href="editstyle.css">
</head>
<body>
    <div class="form-container2">
        <h2>Edit Reservation</h2>
        <form method="POST">
            <input type="hidden" name="id" value="<?= htmlspecialchars($reservation['id']) ?>">
            <label for="room_number">Room Number</label>
            <input type="text" name="room_number" value="<?= htmlspecialchars($reservation['room_number']) ?>" required>

            <label for="status">Status</label>
            <select name="status" required>
                <option value="Pending" <?= $reservation['status'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
                <option value="Confirmed" <?= $reservation['status'] == 'Confirmed' ? 'selected' : '' ?>>Confirmed</option>
                <option value="Cancelled" <?= $reservation['status'] == 'Cancelled' ? 'selected' : '' ?>>Cancelled</option>
            </select>

            <button class="btn1" type="submit" name="edit">Update</button>
        </form>
    </div>
</body>
</html>