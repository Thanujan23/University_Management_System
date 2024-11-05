<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up successful</title>
    <style>
        /* Add your CSS styles here */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    text-align: center;
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #007BFF;
    font-size: 28px;
}

p {
    color: #333;
    font-size: 18px;
}

.login-button {
    display: inline-block;
    background-color: #007BFF;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    font-size: 18px;
    margin-top: 20px;
}

.login-button:hover {
    background-color: #0056b3;
}
    </style>
</head>

<body>s
    <div class="container">
        <h1>Sign up successful</h1>
        <p>Your sign up was successful! You can now log in using the button below:</p>
        <a class="login-button" href="leclogin.php">Login</a>
    </div>
</body>

</html>