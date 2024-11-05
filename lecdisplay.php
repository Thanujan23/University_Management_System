<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    
    include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer details</title>
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
    <h1 >Lecturer Registration details</h1>
<div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col"> lecturer ID </th>
          <th scope="col"> Department ID </th>
          <th scope="col"> First name </th>
          <th scope="col"> Last name </th>
          <th scope="col"> Age </th>
          <th scope="col"> Qualification </th>
          <th scope="col"> Email </th>
          <th scope="col"> Contact number </th>
          </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT lec1.*, department.departid 
        FROM lec1 
        INNER JOIN department ON lec1.departid = department.departid";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $userid = $row['lecid'];
            $deptid = $row['departid']; // Added department ID
            $fname = $row['firstname'];
            $lname = $row['lastname'];
            $age = $row['age'];
            $qua = $row['qua'];
            $email=$row['email'];
            $contact=$row['contact'];
            echo '<tr>
          <th scope="row">' . $userid . '</th>
          <td>' . $deptid . '</td> <!-- Display department ID -->
          <td>' . $fname . '</td>
          <td>' . $lname . '</td>
          <td>' . $age . '</td>
          <td>' . $qua . '</td>
          <td>' . $email . '</td>
          <td>' . $contact . '</td>
          <td>
          <button class="btn1"><a href="lecupdate.php? updateid=' . $userid . '"> update </a></button>
          <button class="btn2"><a href ="lecdelete.php? deleteid=' . $userid . '"> delete </a></button>
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