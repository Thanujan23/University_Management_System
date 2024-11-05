
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course page</title>
    <link href="course.css" type="text/css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <h2 style="color: blue;">ADD COURSE</h2>

        <form method="post">
            <input type="text" id="cname" name="cname" placeholder="Course name" required>
            <input type="text" id="dur" name="dur" placeholder="Duration" required><br>
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

            <input type="date" id="date" name="date" placeholder="Start date" required><br>
            <input type="submit" value="ADD" id="submit" name="submitcou">
            <a href="coursedisplay.php"><button type="button" id="vde" name="vde">View details</button></a>
        </form>
    
    </div>

</body>
</html>
