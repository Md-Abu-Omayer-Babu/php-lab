<?php
    include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Graduate Admission Form</title>
</head>
<body>
    <h2>Online Graduate Admission</h2>
    <form action="insert_info.php" method="post">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Phone: <input type="text" name="phone" required><br><br>
        Program: <input type="text" name="program" required><br><br>
        Department: <input type="text" name="department" required><br><br>
        Date of Birth: <input type="date" name="dob" required><br><br>
        <button type="submit">Apply</button>
    </form>
</body>
</html>
