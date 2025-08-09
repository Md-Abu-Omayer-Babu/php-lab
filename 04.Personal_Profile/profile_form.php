<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Personal Profile Form</title>
</head>
<body>
    <h2>Enter Your Personal Profile</h2>
    <form action="profile_display.php" method="post">
        Full Name: <input type="text" name="fullname" required/><br><br>
        Email: <input type="text" name="email" required/><br><br>
        Date of Birth: <input type="date" name="dob" required/><br><br>
        Phone Number: <input type="text" name="phone" required/><br><br>
        Address: <textarea name="address" rows="3" cols="30" required></textarea><br><br>
        Profession: <input type="text" name="profession" required/><br><br>
        Country: <input type="text" name="country" required/><br><br>
        About Me: <textarea name="about" required></textarea><br><br>
        <input type="submit" value="Show Profile" />
    </form>
</body>
</html>
