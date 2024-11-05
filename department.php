
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>department page</title>
    <link href="course.css" type="text/css" rel="stylesheet">
</head>
<body>
     <div class="container">
        <h2 style="color: blue;">ADD department</h2>
        <form method="post">
            <input type="text" id="dname" name="dname" placeholder="Department name" required>
            <input type="text" id="hod" name="hod" placeholder="Head of department" required><br>
            <input type="hidden" id="departid" name="departid" value="your_depart_id_here">

            <input type="submit" value="ADD" id="submit" name="submitde">
            <a href="seedepart.php"><button type="button" id="vde" name="vde">View details</button></a>
        </form>
    </div>
</body>
</html>
