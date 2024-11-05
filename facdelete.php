<?php
include 'config.php';

if (isset($_GET['deleteid'])) {
   $coid = $_GET['deleteid'];

   $sql = "delete from facility where facid = $coid";
   $result = mysqli_query($conn, $sql);
   if ($result) {
      //echo "Deleted successfully";
      header('location:facdisplay.php');
   } else {
      die(mysqli_error($conn));
}
}
?>