<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'config.php';

$userid = $_GET['updateid'];


$sql = "select * from user1 where userid = $userid";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$fname = $row['firstname'];
$lname = $row['lastname'];
$email=$row['email'];
$dob=$row['dob'];


if (isset($_POST['submit'])) {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
 

    $sql = "update user1 set userid ='$userid',firstname = '$fname',lastname = '$lname',email='$email',dob='$dob'
    where userid = $userid";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Data updated successfully";
        header('location: Display.php');
    } else {
        // die(mysqli_error($con));
        echo "Error updating data: " . mysqli_error($conn);

    }
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
                autocomplete="off" value=<?php echo $fname ?>>

            <br>
            <br>   

            <label>Last name:</label>
            <input class="text" id="lastname" name="lname" type text placeholder="Enter your last name" required
                autocomplete="off" value=<?php echo $lname ?>>

            <br>
            <br>




            <label>Email:</label>
            <input class="email" id="email" name="email" type="text" placeholder="Enter your email" required
                autocomplete="off" value=<?php echo $email ?>>

            <br>
            <br>

            
            <label>Date of birth:</label>
            <input class="contact" id="contactno" name="dob" type="date" placeholder="Enter your date of birth"  required
                autocomplete="off" value=<?php echo $dob ?>>

            <br>
            <br>

            <button type="submit" name="submit" value="submit">Update</button>
        </form>
    </div>
</body>
</html>
