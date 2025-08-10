<!DOCTYPE html>
<html lang="en">
<head>
<title>Student Profile Form</title>
<script src="script.js"></script>
</head>
<body>
<h2>Student Profile Form</h2>
<form name="studentForm" action="result.php" method="post" onsubmit="return validateForm();">
    Name: <input type="text" name="name" /><br><br>
    Roll: <input type="number" name="roll" /><br><br>
    Reg: <input type="number" name="reg" /><br><br>
    Dept: <input type="text" name="dept" /><br><br>
    Session: <input type="text" name="session" /><br><br>
    Email: <input type="email" name="email" /><br><br>
    Phone: <input type="text" name="phone" /><br><br>
    DOB: <input type="date" name="dob" /><br><br>
    
    Gender:
    <select name="gender">
        <option value="">Select</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select><br><br>

    Courses:<br>
    <input type="checkbox" name="courses[]" value="Math" /> Math<br>
    <input type="checkbox" name="courses[]" value="Physics" /> Physics<br>
    <input type="checkbox" name="courses[]" value="Chemistry" /> Chemistry<br><br>

    Optional Course:<br>
    <input type="radio" name="optional" value="Biology" /> Biology<br>
    <input type="radio" name="optional" value="HMath" /> H.Math<br><br>

    Address:<br>
    <textarea name="address" rows="4" cols="40"></textarea><br><br>

    <input type="submit" value="Submit" />
</form>
</body>
</html>
