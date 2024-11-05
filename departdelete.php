<?php
include 'config.php';

if (isset($_GET['deleteid'])) {
   $coid = $_GET['deleteid'];

   $sql = "delete from department where departid = $coid";
   $result = mysqli_query($conn, $sql);
   if ($result) {
      //echo "Deleted successfully";
      header('location:departdisplay.php');
   } else {
      die(mysqli_error($conn));
}
}
?>

