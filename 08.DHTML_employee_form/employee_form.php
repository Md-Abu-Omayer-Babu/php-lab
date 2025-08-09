<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Employee Profile Form</title>
    <script src="script.js"></script>
</head>
<body>

<h2>Employee Profile</h2>
<form action="submit_employee.php" method="post" name="empForm" onsubmit="return validateForm()">
    Full Name: <input type="text" name="fullname"><br><br>
    Email: <input type="text" name="email"><br><br>
    Phone: <input type="text" name="phone" maxlength="10"><br><br>
    Department: <input type="text" name="department"><br><br>
    Position: <input type="text" name="position"><br><br>
    Salary: <input type="text" name="salary"><br><br>
    Hire Date: <input type="date" name="hire_date"><br><br>
    Address: <textarea name="address" rows="4" cols="30"></textarea><br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
