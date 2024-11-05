<?php
// reject_registration.php
include 'config.php';

if (isset($_GET['lecid'])) {
    $lecturerId = $_GET['lecid'];

    // Delete the registration from the database
    $query = "DELETE FROM lec1 WHERE lecid = $lecturerId";
    $result = mysqli_query($conn, $query);

    // Handle the result as needed
}
?>
