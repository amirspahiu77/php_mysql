<?php
$username = $_GET['username'];
$password = $_GET['password'];
echo "<br>";
echo $username;
echo "<br>";
echo $password;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our PHP FORm</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="username">Username: </label>
        <input type="text" name="username" id="username" placeholder="Username"><br>
        <label for="password">Password: </label><br>
        <input type="password" name="password" id="password" placeholder="Password"><br>
        <input type="submit" value="Submit">
    </form> 
</body>
</html>