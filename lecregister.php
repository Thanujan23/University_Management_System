<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include 'config.php';


//inserting data into SQL
    if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $age=$_POST['age'];
        $qua=$_POST['qua'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $pass=$_POST['password'];
        $cpass=$_POST['conpass'];
        $department = $_POST['department'];


// Password validation
    if (strlen($pass) < 8) {
        die("Password must be at least 8 characters");
    }

    if (!preg_match("/[a-zA-Z]/", $pass)) {
        die("Password must contain at least one letter");
    }

    if (!preg_match("/[0-9]/", $pass)) {
        die("Password must contain at least one number");
    }

    if ($_POST['password'] !== $_POST["conpass"]) {
        die("Passwords do not match");
    }


        $sql="INSERT INTO lec1 (firstname, lastname,age,qua,departid, email, contact, password,status) VALUES ('$fname', '$lname','$age','$qua','$department', '$email', '$contact','$pass','Pending')";

        $result=mysqli_query($conn,$sql);


        if($result){
            // echo "Data inserted successfully";
            header('location: lecsignup.php');
        }
        else{
            echo "Data inserted unsuccessfull";
            die(mysqli_error($conn));
      }
   }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link href="new.css" type="text/css" rel="stylesheet">
</head>
<body>

    <div class="video-container">
        <video autoplay loop muted>
            <source src="video/159029 (720p).mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>


    <div class="container">
        <h2 style="color: blue;">Lecturer Registration</h2>

        <form method="post">
            <input type="text" id="fname" name="fname" placeholder="First Name" required>
            <input type="text" id="lname" name="lname" placeholder="Last Name" required><br>
            <input type="text" id="age" name="age" placeholder="Age" required><br>
            <input type="text" id="qua" name="qua" placeholder="Your Qualification" required><br>
            <label for="departments">Select a Department:</label>
            <select id="departments" name="department">
            <?php
            // Include your database connection
            include 'config.php';

            // Fetch department names from the database
            // $query = "SELECT departname FROM department";

            $query = "SELECT departid, departname FROM department";

            $result = mysqli_query($conn, $query);

            // Loop through the results to generate select options
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['departid'] . "'>" . $row['departname'] . "</option>";
            }
            ?>
            </select>
            <input type="hidden" id="selectedDepartmentId" name="selectedDepartmentId">

            <input type="email" id="email" name="email" placeholder="Email" required><br>
            <input type="tel" id="contact" name="contact" placeholder="Contact number"  maxlength="10" required><br>
            <input type="password" id="password" name="password" placeholder="Password" required><br>
            <input type="password" id="conpass" name="conpass" placeholder="Confirm Password" required><br>

            <div class="remember">
                <input type="checkbox" id="checkbox">
                <p class="re">Remember me</p>
            </div>

            <input type="submit" value="Register" id="submit" name="submit">

        </form>

        <!-- icons -->
        <!-- <div class="login-icons">
            <p>Sign up with</p>
            <div class="social-icons">
                <a href="#" class="fb-icon"><img src="image/fb.png" alt="Facebook"></a>
                <a href="#"><img src="image/google123.png.jpg" alt="Google"></a>
                <a href="#"><img src="image/instagram123.png.jpg" alt="Instagram"></a>
            </div>
        </div> -->

        <div class="dha">
            <p>Have an account<a href="leclogin.php">Login?</a></p>
        </div>

    </div>
    </div>
</body>
</html>
