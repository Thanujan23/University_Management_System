<?php

include "config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register as a</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh; /* This ensures that the container takes up the full viewport height */
            overflow: hidden; /* Hide overflow to prevent scrollbars */
            position: relative;
        }

        video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1; /* Place the video behind other content */
        }

        h1 {
            text-align: center;
            color: #fff; /* Set text color to white for better visibility on video background */
        }

        .button-container {
            display: flex;
            gap: 10px;
            z-index: 1; /* Place buttons above the video */
        }

        input[type="submit"] {
            width: 150px;
            padding: 10px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            background-color: #4caf50; /* Green */
            color: white;
            border: 1px solid #4caf50;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <video autoplay loop muted>
        <!-- Replace 'your-video.mp4' with the path to your video file -->
        <source src="video\pexels-rodnae-productions-5762195 (2160p).mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <h1>Register As a</h1>

    <div class="button-container">
    <a href="new.php"><input type="submit" id="submitStudent" name="submit" value="STUDENT"></a>
    <a href="lecregister.php"><input type="submit" id="submitLecturer" name="submit" value="LECTURER"></a>
    </div>
</body>
</html>
