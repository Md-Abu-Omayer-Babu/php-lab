<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $dob = $_POST['dob'];
        $department = $_POST['department'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
    }

    echo "<h2>Submitted Data:</h2>";
    echo "Name: " . $name . "<br>";
    echo "Roll: " . $roll . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Phone: " . $phone . "<br>";
    echo "DOB: " . $dob . "<br>";
    echo "Department: " . $department . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "Address: " . $address . "<br>";

    echo "<a href='student_form.php'>Go Back</a>";
?>