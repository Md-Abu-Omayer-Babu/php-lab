<?php
    include("config.php");

    $id = $_GET['id'] ?? 0;
    $result = mysqli_query($conn, "SELECT * FROM admission WHERE id=$id");
    $data = mysqli_fetch_assoc($result);


    echo "<h2>Graduate Admission Profile</h2>";

    if ($data) { 
        echo "Name:{$data['name']}" . "<br>";
        echo "Email: {$data['email']}" . "<br>";
        echo "Phone: {$data['phone']}" . "<br>";
        echo "Program: {$data['program']}" . "<br>";
        echo "Department: {$data['department']}" . "<br>";
        echo "Date of Birth: {$data['dob']}" . "<br>";
    } else {
        echo "No profile found." . "<br>";
    }

?>