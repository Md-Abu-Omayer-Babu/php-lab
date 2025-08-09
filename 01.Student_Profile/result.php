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
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Roll: " . htmlspecialchars($roll) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Phone: " . htmlspecialchars($phone) . "<br>";
    echo "DOB: " . htmlspecialchars($dob) . "<br>";
    echo "Department: " . htmlspecialchars($department) . "<br>";
    echo "Gender: " . htmlspecialchars($gender) . "<br>";
    echo "Address: " . htmlspecialchars($address) . "<br>";

    echo "<a href='student_form.php'>Go Back</a>";
?>