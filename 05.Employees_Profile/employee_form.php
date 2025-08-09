<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Employee Profile Form</title>
</head>
<body>
    <h2>Employee Profile Form</h2>
    <form action="employee_save.php" method="post">
        Full Name: <input type="text" name="fullname" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Phone: <input type="text" name="phone"><br><br>
        Department: <input type="text" name="department"><br><br>
        Position: <input type="text" name="position"><br><br>
        Salary: <input type="number" step="0.01" name="salary"><br><br>
        Hire Date: <input type="date" name="hire_date"><br><br>
        Address: <textarea name="address" required></textarea><br><br>
        <input type="submit" value="Save Employee" />
    </form>
</body>
</html>
