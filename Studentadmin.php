<?php
include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        #sidebar {
            height: 100%;
            width: 250px;
            position: fixed ;
            background-color: #111;
            padding-top: 20px;
            padding-left: 10px;
            color: white;
        }


#content {
    margin-left: 250px; /* Same as sidebar width */
    padding: 20px;
    box-sizing: border-box; /* Include padding in the width calculation */
}


        #sidebar a {
            text-decoration: none;
            color: white;
            padding: 15px;
            display: block;
            transition: 0.3s;
        }

        #sidebar a:hover {
            background-color: #575757;
        }





    </style>
</head>
<body>

<div id="sidebar">
    <h2>Admin Panel</h2>
    <a href="#" onclick="loadDashboard()">Dashboard</a>
    <a href="javascript:void(0);" onclick="loadStudentDetails()">Student details</a>
    <a href="javascript:void(0);" onclick="loadLecturerDetails()">Lecturer details</a>

</div>

<div id="content">
    <h2>Welcome to the Student Dashboard</h2>
    <p>This is a sample admin dashboard. You can customize it further based on your requirements.</p>
</div>

<script>

function loadDashboard() {
        document.getElementById("content").innerHTML = `
            <div class="widget">
                <h3>Dashboard Widget</h3>
                <p>Content for the dashboard goes here.</p>
            </div>
        `;
    }
    function loadStudentDetails() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("content").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "Display.php", true);
        xhttp.send();
    }

    function loadLecturerDetails() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("content").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "lecdisplay.php", true);
        xhttp.send();
    }

    function loadCourseDetails() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("content").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "course.php", true);
    xhttp.send();
}







</script>

</body>
</html>


