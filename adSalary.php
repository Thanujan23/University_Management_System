

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Salary</title>
    <link href="course.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 style="color: blue;">Add Salary</h2>

        <form method="post">
            <label for="method">Method:</label><br>
            <select id="method" name="method" required>
                <option value="bank_transfer">Bank Transfer</option>
                <option value="cheque">Cheque</option>
                <option value="cash">Cash</option>
            </select><br>
            
            <label for="amount">Amount:</label><br>
            <input type="number" id="amount" name="amount" placeholder="Enter amount" required><br>
            
            <label for="effective_date">Effective Date:</label><br>
            <input type="date" id="effective_date" name="effective_date" required><br>
            <label for="lec">Specific Lecture firstname:</label>
            <select id="lec" name="lecid">
            <?php
            // Include your database connection
            include 'config.php';

            // Fetch department names from the database
            // $query = "SELECT departname FROM department";

            $query = "SELECT lecid FROM lec1";

            $result = mysqli_query($conn, $query);

            // Loop through the results to generate select options
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['lecid'] . "'>" . $row['lecid'] . "</option>";
            }
            ?>
            </select>
            
            <input type="submit" value="Add Salary" id="submit" name="submit_salary">
            <a href="salary_display.php"><button type="button" id="vde" name="vde">View Salary Details</button></a>
        </form>
    </div>
</body>
</html>
