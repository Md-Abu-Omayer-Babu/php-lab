<?php
session_start();
include("config.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $confirm  = trim($_POST['confirm_password'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $name     = trim($_POST['name'] ?? '');
    $contact  = trim($_POST['contact'] ?? '');

    $errors = [];

    if (!$username || !$password || !$email || !$name || !$contact) {
        $errors[] = "All fields are required.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    if ($password !== $confirm) {
        $errors[] = "Passwords do not match.";
    }
    if (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters.";
    }

    // Check if username exists
    $username = mysqli_real_escape_string($conn, $username);
    $checkUser = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    if (mysqli_num_rows($checkUser) > 0) {
        $errors[] = "Username already taken.";
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header("Location: register.php");
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $email = mysqli_real_escape_string($conn, $email);
    $name = mysqli_real_escape_string($conn, $name);
    $contact = mysqli_real_escape_string($conn, $contact);

    $sql = "INSERT INTO users (username, password, email, name, contact) 
            VALUES ('$username', '$hashedPassword', '$email', '$name', '$contact')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['success'] = "Registration successful! You can now log in.";
        header("Location: register.php");
        exit;
    } else {
        $_SESSION['errors'] = ["Database error: " . mysqli_error($conn)];
        header("Location: register.php");
        exit;
    }
} else {
    header("Location: register.php");
    exit;
}
?>