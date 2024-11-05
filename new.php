<!-- <php
    
    include 'config.php';


//inserting data into SQL
    if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $dob=$_POST['date'];
        $pass=$_POST['password'];
        $cpass=$_POST['conpass'];


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


        $sql="INSERT INTO user1 (firstname, lastname, email, dob, password) VALUES ('$fname', '$lname', '$email', '$dob','$pass')";

        $result=mysqli_query($conn,$sql);


        if($result){
            // echo "Data inserted successfully";
            header('location: signupsuccess.php');
        }
        else{
            echo "Data inserted unsuccessfull";
            die(mysqli_error($conn));
      }
   }

?> -->

<?php
print_r($_FILES);
include 'config.php';

// Inserting data into SQL
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $dob = $_POST['date'];
    $pass = $_POST['password'];
    $cpass = $_POST['conpass'];

    // Password validation
    if (strlen($pass) < 8 || !preg_match("/[a-zA-Z]/", $pass) || !preg_match("/[0-9]/", $pass) || ($_POST['password'] !== $_POST["conpass"])) {
        die("Invalid password. Password must be at least 8 characters, contain at least one letter, one number, and match the confirm password.");
    }

    // Handle profile image upload
    $targetDirectory = "image/"; // Specify the directory to store uploaded images
    $targetFile = $targetDirectory . basename($_FILES["profile_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a valid image
    $check = getimagesize($_FILES["profile_image"]["tmp_name"]);
    if ($check === false) {
        die("File is not a valid image.");
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        die("Sorry, file already exists.");
    }

    // Check file size
    if ($_FILES["profile_image"]["size"] > 500000) {
        die("Sorry, your file is too large.");
    }

    // Allow only certain file formats
    $allowedFormats = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $allowedFormats)) {
        die("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
    }

    // Move uploaded file to specified directory
    if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $targetFile)) {
        // Image uploaded successfully, now insert data into the database
        $profileImagePath = $targetFile;
        $sql = "INSERT INTO user1 (firstname, lastname, email, dob, password, profile_image) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        // Bind parameters to the prepared statement
        mysqli_stmt_bind_param($stmt, "ssssss", $fname, $lname, $email, $dob, $pass, $profileImagePath);

        // Execute the statement
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            // Data inserted successfully
            header('location: signupsuccess.php');
        } else {
            echo "Data insertion unsuccessful";
            die(mysqli_error($conn));
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        die("Sorry, there was an error uploading your file.");
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
        <h2 style="color: blue;">Student Registration</h2>

        <form method="post" enctype="multipart/form-data">
            <input type="text" id="fname" name="fname" placeholder="First Name" required>
            <input type="text" id="lname" name="lname" placeholder="Last Name" required><br>
            <input type="email" id="email" name="email" placeholder="Email" required><br>
            <input type="date" id="date" name="date" placeholder="Date of Birth" required><br>
            <input type="password" id="password" name="password" placeholder="Password" required><br>
            <input type="password" id="conpass" name="conpass" placeholder="Confirm Password" required><br>

            <label for="profile_image">Profile Image:</label>
                <input type="file" id="profile_image" name="profile_image" accept="image/*"><br>

            <div class="remember">
                <input type="checkbox" id="checkbox">
                <p class="re">Remember me</p>
            </div>

            <input type="submit" value="Register" id="submit" name="submit">

        </form>

        <!-- icons -->
        <div class="login-icons">
            <p>Sign up with</p>
            <div class="social-icons">
                <a href="#" class="fb-icon"><img src="image/fb.png" alt="Facebook"></a>
                <a href="#"><img src="image/google123.png.jpg" alt="Google"></a>
                <a href="#"><img src="image/instagram123.png.jpg" alt="Instagram"></a>
            </div>
        </div>

        <div class="dha">
            <p>Have an account<a href="login.php">Login?</a></p>
        </div>

    </div>
    </div>
</body>
</html>
