<?php require 'authentication.php'; require 'config.php'; ?>
<?php
if (isset($_GET['id'])) {
    $stmt = $pdo->prepare("DELETE FROM reservations WHERE id=?");
    $stmt->execute([$_GET['id']]);
    header('Location: dashboard.php');
    exit();
}
?>