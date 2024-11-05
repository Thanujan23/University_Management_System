<?php
include 'config.php';

if (isset($_GET['deleteid'])) {
   $userid = $_GET['deleteid'];

   $sql = "delete from user1 where userid = $userid";
   $result = mysqli_query($conn, $sql);
   if ($result) {
      //echo "Deleted successfully";
      header('location:Display.php');
   } else {
      die(mysqli_error($conn));
}
}
?>