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
    <title>Salary details</title>
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
    <h1 >Salary details</h1>
<div class="container">
  <table class="table">
    <thead>
        <tr>
            <th>Salary ID</th>
            <th>Lecture id</th>
            <th>Method</th>
            <th>Amount</th>
            <th>Issue date</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT salary.salaryid, salary.method, salary.amount, salary.date, lec1.lecid 
                FROM salary 
                INNER JOIN lec1 ON salary.lecid = lec1.lecid";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['salaryid'] . '</td>';
                echo '<td>' . $row['lecid'] . '</td>';
                echo '<td>' . $row['method'] . '</td>'; 
                echo '<td>' . $row['amount'] . '</td>';
                echo '<td>' . $row['date'] . '</td>';
                

                // echo '<td>';
                // echo '<button class="btn1"><a href="courseupdate.php?updateid=' . $row['couid'] . '">Update</a></button>';
                // echo '<button class="btn2"><a href="coursedelete.php?deleteid=' . $row['couid'] . '">Delete</a></button>';
                // echo '</td>';
                // echo '</tr>';
            }
        }
        ?>
    </tbody>
</table>

  </div>

    
</body>
</html>
