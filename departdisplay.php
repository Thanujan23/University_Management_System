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
    <title>Course details</title>
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
    <h1 >Department details</h1>
<div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col"> Department ID </th>
          <th scope="col"> Department name </th>
          <th scope="col"> Head of department </th>
          </tr>
      </thead>
      <tbody>
        <?php
        $sql = "select * from department";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $coid = $row['departid'];
            $cname = $row['departname'];
            $dur = $row['hod'];
            echo '<tr>
          <th scope="row">' . $coid . '</th>
          <td>' . $cname . '</td>
          <td>' . $dur . '</td>
          <td>

          <button class="btn1"><a href="departupdate.php? updateid=' . $coid . '"> update </a></button>
          <button class="btn2"><a href ="departdelete.php? deleteid=' . $coid . '"> delete </a></button> 
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

