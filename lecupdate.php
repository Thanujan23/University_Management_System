<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'config.php';

if (isset($_GET['updateid'])) {
    $lecid = $_GET['updateid'];

    $sql = "SELECT * FROM lec1 WHERE lecid = $lecid";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $fname = $row['firstname'];
        $lname = $row['lastname'];
        $age = $row['age'];
        $qua = $row['qua'];
        $email = $row['email'];
        $contact = $row['contact'];

        if (isset($_POST['submit'])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $age = $_POST['age'];
            $qua = $_POST['qua'];
            $email = $_POST['email'];
            $contact = $_POST['contact'];

            $sql = "UPDATE lec1 SET firstname = '$fname', lastname = '$lname', age = '$age', qua = '$qua', email = '$email', contact = '$contact'
                    WHERE lecid = $lecid";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "Data updated successfully";
                header('location: lecdisplay.php');
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
    <title>UPDATE ADMIN PAGE</title>
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

        .text, .contact, .email {
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
            <label>First name:</label>
            <input class="text" id="firstname" name="fname" type="text" placeholder="Enter your first name" required
                autocomplete="off" value="<?php echo isset($fname) ? $fname : ''; ?>">

            <br>
            <br>   

            <label>Last name:</label>
            <input class="text" id="lastname" name="lname" type="text" text placeholder="Enter your last name" required
                autocomplete="off" value="<?php echo isset($lname) ? $lname : ''; ?>">

            <br>
            <br>

            <label>Age:</label>
            <input class="text" id="age" name="age" type="text" text placeholder="Enter your age" required
                autocomplete="off" value="<?php echo isset($age) ? $age : ''; ?>">

            <br>
            <br>

            <label>Qualification:</label>
            <input class="text" id="qua" name="qua" type="text" text placeholder="Enter your Qualification" required
                autocomplete="off" value="<?php echo isset($qua) ? $qua : ''; ?>">

            <br>
            <br>




            <label>Email:</label>
            <input class="email" id="email" name="email" type="text" placeholder="Enter your email" required
                autocomplete="off" value="<?php echo isset($email) ? $email : ''; ?>">

            <br>
            <br>

            
            <label>Contact number:</label>
            <input class="contact" id="contactno" name="contact" type="number" placeholder="Enter your Contact" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required
                autocomplete="off" value="<?php echo isset($contact) ? $contact : ''; ?>">

            <br>
            <br>

            <button type="submit" name="submit" value="submit">Update</button>
        </form>
    </div>
</body>
</html>
