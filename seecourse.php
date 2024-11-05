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
    <h1 >Course details</h1>
<div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col"> Course ID </th>
          <th scope="col"> Course name </th>
          <th scope="col"> Duration </th>
          <th scope="col"> Start date </th>
          </tr>
      </thead>
      <tbody>
        <?php
        $sql = "select * from course";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $coid = $row['couid'];
            $cname = $row['coname'];
            $dur = $row['duration'];
            $date=$row['stdate'];
            echo '<tr>
          <th scope="row">' . $coid . '</th>
          <td>' . $cname . '</td>
          <td>' . $dur . '</td>
          <td>' . $date . '</td>
          
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
