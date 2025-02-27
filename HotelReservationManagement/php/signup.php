<?php session_start(); require 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>
    <div class="form-container2">
        <h2>Sign Up</h2>
        <?php
        if (isset($_POST['signup'])) {
            $username = trim($_POST['username']);
            $password = $_POST['password'];
            
            $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
            $stmt->execute([$username]);
            if ($stmt->fetch()) {
                echo "<p class='error'>Username already exists. Try another.</p>";
            } elseif (strlen($password) < 6) { 
                echo "<p class='error'>Password must be at least 6 characters long.</p>";
            } else {
                $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
                $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
                if ($stmt->execute([$username, $hashedPassword])) {
                    echo "<p class='success'>Account created successfully. Redirecting...</p>";
                    header("refresh:2;url=login.php");
                    exit();
                } else {
                    echo "<p class='error'>Signup failed. Try again later.</p>";
                }
            }
        }
        ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button class="btn1" type="submit" name="signup">Sign Up</button>
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</body>
</html>
