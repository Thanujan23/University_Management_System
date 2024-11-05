<?php

include 'config.php';

if (isset($_GET['deleteid'])) {
   $coid = $_GET['deleteid'];

   $sql = "delete from course where couid = $coid";
   $result = mysqli_query($conn, $sql);
   if ($result) {
      //echo "Deleted successfully";
      header('location:coursedisplay.php');
   } else {
      die(mysqli_error($conn));
}
}
?>