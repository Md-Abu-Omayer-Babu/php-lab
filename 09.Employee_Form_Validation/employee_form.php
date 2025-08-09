<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Employee Profile Form</title>
</head>
<body>
    <h2>Employee Profile Form</h2>
    <form action="validate_employee.php" method="post">
        Full Name: <input type="text" name="fullname"><br><br>
        Email: <input type="text" name="email"><br><br>
        Phone: <input type="text" name="phone" maxlength="10"><br><br>
        Department: <input type="text" name="department"><br><br>
        Position: <input type="text" name="position"><br><br>
        Salary: <input type="text" name="salary"><br><br>
        Hire Date: <input type="date" name="hire_date"><br><br>
        Address:<br>
        <textarea name="address"></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
