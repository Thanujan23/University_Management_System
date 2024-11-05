<!-- <php
session_start();
include 'config.php';

if (!isset($_SESSION['userid'])) {
    header('location: login.php');   Redirect to login if not logged in
    exit();
}

$user_id = $_SESSION['userid'];
$sql = "SELECT * FROM user1 WHERE userid = $user_id";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $profile_image = $row['profile_image'];
} else {
    echo "Error fetching user data";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><php echo $firstname . ' ' . $lastname; ?>'s Profile</title>
</head>
<body>
    <h1>Welcome, <php echo $firstname . ' ' . $lastname; ?>!</h1>
    <img src="<php echo $profile_image; ?>" alt="Profile Image">
    Add more profile details as needed
</body>
</html> -->


<?php
include 'config.php';
session_start();

$user = $_SESSION['lecid'];



if (!isset($_SESSION['lecid'])) {
    header('location: lecregister.php');
    exit(); // Ensure the script stops executing
}

if (isset($_GET['leclogout'])) {
    unset($_SESSION['lecid']);
    session_destroy();
    header('location: leclogin.php');
    exit(); // Ensure the script stops executing
}

$conn = mysqli_connect($hostname, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM lec1 WHERE lecid='$user'";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
<header>
        <div class="navbar">

            <div class="logo-container">
                <img src="image/7791868.jpg" alt="Logo" class="logo">
                <span class="university-name">IEA UNIVERSITY</span>
            </div>
            <nav>
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#" id="coursesBtn">COURSES</a></li>
                    <li><a href="#" id="facultiesBtn">FACULTIES</a></li>
                    <li><a href="#">STAFF</a></li>
                    <li><a href="profile.php">MY ACCOUNT</a></li>


                    <li class="regi"><a href="regias.php">REGISTER</a></li>
                </ul>
            </nav>
        </div>

        
    </header>
    <div class="container">

        <header1>
            <h1>Lecture Profile</h1>
        </header1>
        <img src="image/7791868.jpg" alt="Profile Photo" class="profile-photo">
        <ul>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li><b>First Name:</b> " . $row['firstname'] . "</li>";
                echo "<li><b>Last Name:</b> " . $row['lastname'] . "</li>";
                echo "<li><b>Age:</b> " . $row['age'] . "</li>";
                echo "<li><b>Qualification:</b> " . $row['qua'] . "</li>";
                echo "<li><b>E-mail:</b> " . $row['email'] . "</li>";
                echo "<li><b>Contact:</b> " . $row['contact'] . "</li>";

            }
            ?>
        </ul>
        <div class="profile-actions">
            <a href="lecprofileupdate.php" class="btn update-btn">Update Profile</a>
            <a href="leclogout.php" class="btn logout-btn">Logout</a>
            <a href="lecprofileddelete.php" class="btn delete-btn">Delete</a>
        </div>
    </div>

</body>

</html>