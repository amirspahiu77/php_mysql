<?php
session_start();
include('condig.php');

if (!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit();
}
$isadmin = $_SESSION['role'] === 'admin';

if (isset($_GET['delete']) && $isdmin){
    $movie_id = intval($_GET['delete']);
    $sql = "DELETE FROM movies WHERE ID = $movie_id";
if (mysqli_query($conn, $sql)){
    $message = "Movie deleted succesfully!";
} else{
    $message = "Error deleteing movie: ". mysqli_error($conn);
 }
}
 $result = mysqli_query($conn, "SELECT * FROM movies ORDER BY rating DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php include('header.php'); ?>
    <div class="container">
        <h1>Movie Dashboard</h1>
        <?php if (isset($message)){ ?>
            <p class="message"><?php echo $message; ?></p>
        <?php } ?>

        <?php if ($isAdmin) { ?>
          <a href="addmovie.php" class="btn">Add New Movie</a>
        <?php } ?>
        <h2>Movie List</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Rating</th>
                    <th>Quality</th>
                    <th>Description</th>
                    <?php if ($isAdmin) { ?>
                    <th>Actions</th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php while ($movie = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $movie['id']; ?></td>
                        <td><?php echo $movie['name']; ?></td>
                        <td><?php echo $movie['rating']; ?></td>
                        <td><?php echo $movie['quality']; ?></td>
                        <td><?php echo $movie['description']; ?></td>
                        <?php if ($idAsmin) { ?>
                        <td>
                            <a href="edit_movie.php?id=<?php echo $movie['id']; ?>">Edit</a>
                            <a href="dashboard.php?delete=<?php echo $movie['id']; ?>" onclick="return confirm('Are you sure you want to delete this?')">Delete</a>
                        </td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>      
    </div>
</body>
</html>