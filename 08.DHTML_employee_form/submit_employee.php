<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $department = $_POST['department'];
        $position = $_POST['position'];
        $salary = $_POST['salary'];
        $hire_date = $_POST['hire_date'];
        $address = $_POST['address'];

        echo "<h2>Employee Profile Submitted</h2>";
        
        echo "Full Name: $fullname<br>";
        echo "Email: $email<br>";
        echo "Phone: $phone<br>";
        echo "Department: $department<br>";
        echo "Position: $position<br>";
        echo "Salary: $salary<br>";
        echo "Hire Date: $hire_date<br>";
        echo "Address: $address<br>";

        echo "<br><a href='employee_form.php'>Back to Form</a>";
    } else {
        echo "Invalid request method.";
    }
?>
