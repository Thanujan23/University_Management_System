<?php
include 'config.php';
session_start();

$user = $_SESSION['userid'];

if (!isset($user)) {
    header('location: login.php');
    exit();
}

$conn = mysqli_connect($hostname, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['delete'])) {
    $sql = "DELETE FROM user1 WHERE userid='$user'";
    if (mysqli_query($conn, $sql)) {
        unset($_SESSION['user']);
        session_destroy();
        header('location: login.php');
        exit();
    } else {
        echo "Error deleting profile: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Profile</title>
    <link rel="stylesheet" type="text/css" href="delete.css">
</head>

<body>
    <div class="container">
        <h1>Delete Profile</h1>
        <p>Are you sure you want to delete your profile?</p>
        <form method="post">
            <button type="submit" name="delete" class="btn delete-btn">Delete Profile</button>
            <a href="profile.php" class="btn cancel-btn">Cancel</a>
        </form>
    </div>
</body>

</html>