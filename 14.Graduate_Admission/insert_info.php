<?php
    include("config.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name       = trim($_POST['name']);
        $email      = trim($_POST['email']);
        $phone      = trim($_POST['phone']);
        $program    = trim($_POST['program']);
        $department = trim($_POST['department']);
        $dob        = $_POST['dob'];

        $sql = "INSERT INTO admission (name, email, phone, program, department, dob) 
                VALUES ('$name', '$email', '$phone', '$program', '$department', '$dob')";
        
        if (mysqli_query($conn, $sql)) {
            header("Location: profile.php?id=" . mysqli_insert_id($conn));
            exit;
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?>