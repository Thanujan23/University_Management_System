<?php
include 'config.php';

if (isset($_GET['deleteid'])) {
   $userid = $_GET['deleteid'];

   $sql = "delete from lec1 where lecid = $lecid";
   $result = mysqli_query($conn, $sql);
   if ($result) {
      //echo "Deleted successfully";
      header('location:lecdisplay.php');
   } else {
      die(mysqli_error($conn));
}
}
?>