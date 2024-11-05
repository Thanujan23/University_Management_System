<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'config.php';

if (isset($_GET['updateid'])) {
    $coid = $_GET['updateid'];

    $sql = "SELECT * FROM facility WHERE facid = $coid";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $cname = $row['facname'];
        $dur = $row['loc'];

        if (isset($_POST['submit'])) {
            $cname = $_POST['facname'];
            $dur = $_POST['loc'];

            $sql = "UPDATE facility SET facname = '$cname', loc = '$dur'
                    WHERE facid = $coid";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "Data updated successfully";
                // header('location: coursedisplay.php');
            } else {
                echo "Error updating data: " . mysqli_error($conn);
            }
        }
    } else {
        echo "Error fetching data: " . mysqli_error($conn);
    }
} else {
    echo "Missing 'updateid' parameter in the URL";
}


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE Course PAGE</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .Customer-form {
            text-align: left;
            padding: 10px;
        }

        label {
            font-weight: bold;
        }

        .text, .date {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <form class="Customer-form" method="POST">
            <label>Course name:</label>
            <input class="text" id="facname" name="facname" type="text" placeholder="Enter facility name" required
                autocomplete="off" value="<?php echo isset($cname) ? $cname : ''; ?>">

            <br>
            <br>   

            <label>Duration :</label>
            <input class="text" id="loc" name="loc" type= "text" placeholder="Enter location" required
                autocomplete="off" value="<?php echo isset($dur) ? $dur : ''; ?>">

            <br>
            <br>


            
            <button type="submit" name="submit" value="submit">Update</button>
        </form>
    </div>
</body>
</html>
