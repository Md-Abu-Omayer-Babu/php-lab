<?php
    // Start session to hold error messages or success messages
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <script src="script.js"></script>
</head>
<body>
    <h2>User Registration</h2>

<?php
    // Display PHP errors passed through session, if any
    if (isset($_SESSION['errors']) && !empty($_SESSION['errors'])) {
        echo "<ul style='color:red;'>";
        foreach ($_SESSION['errors'] as $err) {
            echo "<li>" . htmlspecialchars($err) . "</li>";
        }
        echo "</ul>";
        unset($_SESSION['errors']);
    }
    if (isset($_SESSION['success'])) {
        echo "<p style='color:green;'>" . htmlspecialchars($_SESSION['success']) . "</p>";
        unset($_SESSION['success']);
    }
    ?>

    <form name="regForm" method="post" action="validations.php" onsubmit="return validateForm()">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        Confirm Password: <input type="password" name="confirm_password"><br><br>
        Email: <input type="text" name="email"><br><br>
        Name: <input type="text" name="name"><br><br>
        Contact: <input type="text" name="contact"><br><br>
        <button type="submit">Register</button>
    </form>
    <br>
    <a href="login.php">Already have an account? Login</a>
</body>
</html>
