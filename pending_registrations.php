<?php
// pending_registrations.php
include 'config.php';

$query = "SELECT * FROM lec1 WHERE status = 'Pending'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Display lecturer details with buttons for approval and rejection
        echo "<p>Name: {$row['firstname']} {$row['lastname']}</p>";
        echo "<p>Email: {$row['email']}</p>";
        echo "<p>Age: {$row['age']}</p>";
        echo "<p>Qualification: {$row['qua']}</p>";
        echo "<p>Contact: {$row['contact']}</p>";
        echo "<button onclick='approveRegistration({$row['lecid']})'>Approve</button>";
        echo "<button onclick='rejectRegistration({$row['lecid']})'>Reject</button>";
    }
} else {
    echo "No pending registrations.";
}
?>
