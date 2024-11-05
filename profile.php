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

$user = $_SESSION['userid'];



if (!isset($_SESSION['userid'])) {
    header('location: new.php');
    exit(); // Ensure the script stops executing
}

if (isset($_GET['logout'])) {
    unset($_SESSION['userid']);
    session_destroy();
    header('location: login.php');
    exit(); // Ensure the script stops executing
}

$conn = mysqli_connect($hostname, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM user1 WHERE userid='$user'";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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
            <h1>User Profile</h1>
        </header1>
        <div class="profile-photo-container">
                 <img src="<?php echo $row['profile_image']; ?>" alt="Profile Photo" class="profile-photo">
        </div>


        <ul>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li><b>First Name:</b> " . $row['firstname'] . "</li>";
                echo "<li><b>Last Name:</b> " . $row['lastname'] . "</li>";
                echo "<li><b>E-mail:</b> " . $row['email'] . "</li>";
                echo "<li><b>Date of birth:</b> " . $row['dob'] . "</li>";

            }
            ?>
        </ul>
        <div class="profile-actions">
            <a href="updateprofile.php" class="btn update-btn">Update Profile</a>
            <a href="logout.php" class="btn logout-btn">Logout</a>
            <a href="profiledelete.php" class="btn delete-btn">Delete</a>
        </div>
    </div>

</body>

</html>