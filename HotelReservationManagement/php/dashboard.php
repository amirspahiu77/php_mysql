<?php 
require 'authentication.php'; 
require 'config.php'; 

function getTotalRooms($pdo) {
    return $pdo->query("SELECT COUNT(*) FROM reservations")->fetchColumn();
}

function getBookedRooms($pdo) {
    return $pdo->query("SELECT COUNT(*) FROM reservations WHERE status='Booked'")->fetchColumn();
}

function getReservations($pdo, $filter = '') {
    $sql = "SELECT * FROM reservations";
    if (!empty($filter)) {
        $sql .= " WHERE room_number LIKE :filter";
    }
    $stmt = $pdo->prepare($sql);
    if (!empty($filter)) {
        $stmt->execute(['filter' => "%$filter%"]);
    } else {
        $stmt->execute();
    }
    return $stmt->fetchAll();
}

$searchQuery = $_GET['search'] ?? '';
$rooms = getReservations($pdo, $searchQuery);

$totalRooms = getTotalRooms($pdo);
$bookedRooms = getBookedRooms($pdo);
$availableRooms = $totalRooms - $bookedRooms;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboardstyle.css">
    <script defer src="script.js"></script>
</head>
<body>
    <div class="container">
        <h2>Dashboard - Reservations</h2>

        <div class="stats">
            <p>Total Rooms: <strong><?php echo $totalRooms; ?></strong></p>
            <p>Booked: <strong><?php echo $bookedRooms; ?></strong></p>
            <p>Available: <strong><?php echo $availableRooms; ?></strong></p>
        </div>

        <form method="GET" action="">
            <input type="text" name="search" placeholder="Search by room number" value="<?php echo htmlspecialchars($searchQuery); ?>">
            <button type="submit">Search</button>
        </form>

        <?php foreach ($rooms as $room): ?>
            <p class="room <?php echo $room['status'] == 'Booked' ? 'booked' : 'available'; ?>">
                Room <?php echo htmlspecialchars($room['room_number']); ?> - 
                <strong><?php echo htmlspecialchars($room['status']); ?></strong> 
                <a href='edit.php?id=<?php echo $room['id']; ?>'>Edit</a> | 
                <a href='delete.php?id=<?php echo $room['id']; ?>' onclick="return confirm('Are you sure?');">Delete</a>
            </p>
        <?php endforeach; ?>

        <a href="create.php" class="btn">Create New Reservation</a>
        <br><br>
        <a href="logout.php" class="btn">Logout</a>

        <div class="slider">
            <img id="slider-img" src="images/room.jpg" alt="Room Image">
        </div>
    </div>
</body>
</html>
