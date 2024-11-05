








<?php
    
    include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration details</title>
    <style>

    h1{
        text-align:center;
      
    }
    .btn {
      padding: 12px 20px;
      background-color: lightblue;
      color: black;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      margin-top: 3%;
      margin-left: 3%;
      font-size: medium;
    }

    .table {
      width: 100%;
      border-collapse: collapse;
      border: 1px solid #ccc;
      margin-top: 5%;
    }

    .table th,
    .table td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: center;
    }

    .btn1 {
      padding: 12px 20px;
      background-color: #0377fc;
      color: black;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      margin-top: 3%;
      margin-left: 3%;
      font-size: medium;
    }

    .btn2 {
      padding: 12px 20px;
      background-color: #c71239;
      color: black;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      margin-top: 3%;
      margin-left: 3%;
      font-size: medium;
    }
  </style>
</head>
<body>
    <h1 >Student Registration details</h1>
<div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col"> User ID </th>
          <th scope="col"> First name </th>
          <th scope="col"> Last name </th>
          <th scope="col"> Email </th>
          <th scope="col"> Date of birth </th>
          </tr>
      </thead>
      <tbody>
        <?php
        $sql = "select * from user1";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $userid = $row['userid'];
            $fname = $row['firstname'];
            $lname = $row['lastname'];
            $email=$row['email'];
            $dob=$row['dob'];
            echo '<tr>
          <th scope="row">' . $userid . '</th>
          <td>' . $fname . '</td>
          <td>' . $lname . '</td>
          <td>' . $email . '</td>
          <td>' . $dob . '</td>
          <td>
          <button class="btn1"><a href="Update1.php? updateid=' . $userid . '"> update </a></button>
          <button class="btn2"><a href ="deleteadmin.php? deleteid=' . $userid . '"> delete </a></button>
        </td>
        </tr>';
          }
        }
        ?>
      </tbody>
    </table>
  </div>

    
</body>
</html>