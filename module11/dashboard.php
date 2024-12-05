<?php
include 'db.php';

//Fetch all users from the database
$sql = "SELECT + FROM users";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Dashboard</title>
    <style>

    </style>
</head>
<body>
    <h2>Users Dashboard</h2>
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <body>
                <!-- -->
            </body>
        </thead>
    </table>
</body>
</html>