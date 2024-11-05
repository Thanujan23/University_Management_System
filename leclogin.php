<!-- 

session_start();
include 'config.php';

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $valid = false;

    $sql = "SELECT * FROM user1 WHERE email = '$email' AND password = '$pass'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        $valid = true;
    }

    if($valid) {
        header('location: home.php');
        exit();
    } else {
        $error = "Invalid Email or Password";
        echo '<script>alert("' . $error . '");</script>';
    }
}

?> -->
<?php
session_start();
include 'config.php';

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $valid = false;

    $sql = "SELECT * FROM lec1 WHERE email = '$email' AND password = '$pass'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['lecid'] = $row['lecid'];  // store user_id in session
        $valid = true;
    }

    if($valid) {
        header('location: lecprofile.php');
        exit();
    } else {
        $error = "Invalid Email or Password";
        echo '<script>alert("' . $error . '");</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link href="login.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 style="color: blue;">Staff Login</h2>

        <form method="post">
            <input type="email" id="email" name="email" placeholder="Email" required><br>
            <input type="password" id="pass" name="pass" placeholder="Password" required>

            <div class="remember">
            <input type="checkbox" id="checkbox"> <p class="re">Remember me</p>
            <a href="#">Forgot password?</a>
            </div>

            <input type="submit" value="LOGIN" id="submit" name="submit">


        </form>


                <!-- icons -->
                <div class="login-icons">
                    <p>Login with</p>
                    <div class="social-icons">
                       <a href="#" class="fb-icon"><img src="image/fb.png" alt="Facebook"></a>
                       <a href="#"><img src="image/google123.png.jpg" alt="Google"></a>
                       <a href="#"><img src="image/instagram123.png.jpg" alt="Instagram"></a>
                    </div>
                 </div>
        
        <div class="dha">
        <p>Don't have an account<a href="lecregister.php">Sign Up?</a></p>
        </div>


    </div>
    
</body>
</html>