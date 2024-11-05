<?php
include 'config.php';

// Inserting data into SQL
if (isset($_POST['submitcou'])) {
    $cname = $_POST['cname'];
    $dur = $_POST['dur'];
    $date = $_POST['date'];
    $department = $_POST['department'];

    // Assuming 'id' is the auto-incremented primary key
    $sql = "INSERT INTO course (coname, duration, stdate,departid) VALUES ('$cname', '$dur', '$date','$department')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location: coursedisplay.php');
    } else {
        echo "Data insertion unsuccessful";
        die(mysqli_error($conn));
    }
}



if (isset($_POST['submitde'])) {
    $cname = $_POST['dname'];
    $dur = $_POST['hod'];

    // Assuming 'id' is the auto-incremented primary key
    $sql = "INSERT INTO department (departname, hod) VALUES ('$cname', '$dur')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location: departdisplay.php');
    } else {
        echo "Data insertion unsuccessful";
        die(mysqli_error($conn));
    }
}


if (isset($_POST['submitf'])) {
    $cname = $_POST['fname'];
    $dur = $_POST['loc'];

    // Assuming 'id' is the auto-incremented primary key
    $sql = "INSERT INTO facility (facname, loc) VALUES ('$cname', '$dur')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location: facdisplay.php');
    } else {
        echo "Data insertion unsuccessful";
        die(mysqli_error($conn));
    }
}

// Inserting data into SQL
if (isset($_POST['submit_salary'])) {
    $method = $_POST['method'];
    $amount = $_POST['amount'];
    $date = $_POST['effective_date'];
    $lecid = $_POST['lecid'];

    // Assuming 'id' is the auto-incremented primary key
    $sql = "INSERT INTO salary (method, amount, date,lecid) VALUES ('$method', '$amount', '$date','$lecid')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location: salarydisplay.php');
    } else {
        echo "Data insertion unsuccessful";
        die(mysqli_error($conn));
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
    <h2>Admin Pane</h2>
    <a href="#" onclick="loadDashboard()">Dashboard</a>
    <a href="javascript:void(0);" onclick="loadStudentDetails()">Student details</a>
    <a href="javascript:void(0);" onclick="loadLecturerDetails()">Lecturer details</a>
    <a href="javascript:void(0);" onclick="loadPendingRegistrations()">Pending Registrations</a>
    <a href="javascript:void(0);" onclick="loadCourseDetails()" >Courses</a>
    <a href="javascript:void(0);" onclick="loadDepartDetails()" >Department</a>
    <a href="javascript:void(0);" onclick="loadFacilityDetails()" >Facilities</a>
    <a href="javascript:void(0);" onclick="loadSalaryDetails()" >Salary details</a>
</div>

<div id="content">
    <h2>Welcome to the Admin Dashboard</h2>
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

function loadDepartDetails() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("content").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "department.php", true);
    xhttp.send();
}

function loadFacilityDetails() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("content").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "facility.php", true);
    xhttp.send();
}

function loadSalaryDetails() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("content").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "adSalary.php", true);
    xhttp.send();
}



function loadPendingRegistrations() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("content").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "pending_registrations.php", true);
        xhttp.send();
    }




    function approveRegistration(lecid) {
        // Send an AJAX request to update the status to "Accepted" in the database
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                // Reload the dashboard or update the content as needed
                loadDashboard();
            }
        };
        xhttp.open("GET", "approve_registration.php?lecid=" + lecid, true);
        xhttp.send();
    }

    function rejectRegistration(lecid) {
        // Send an AJAX request to delete the registration from the database
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                // Reload the dashboard or update the content as needed
                loadDashboard();
            }
        };
        xhttp.open("GET", "reject_registration.php?lecid=" + lecid, true);
        xhttp.send();
    }


</script>

</body>
</html>


