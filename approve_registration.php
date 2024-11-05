<?php
// approve_registration.php
include 'config.php';

if (isset($_GET['lecid'])) {
    $lecturerId = $_GET['lecid'];

    // Update the status to "Accepted" in the database
    $query = "UPDATE lec1 SET status = 'Accepted' WHERE lecid = $lecturerId";
    $result = mysqli_query($conn, $query);

    // Handle the result as needed
}
?>
