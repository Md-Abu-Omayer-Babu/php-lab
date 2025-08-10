<?php
    function validateRequiredFields($fields) {
        foreach ($fields as $field) {
            if (empty(trim($field))) {
                return false;
            }
        }
        return true;
    }

    function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    function validatePhone($phone) {
        return preg_match("/^[0-9]{10}$/", $phone);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"] ?? '';
        $roll = $_POST["roll"] ?? '';
        $reg = $_POST["reg"] ?? '';
        $dept = $_POST["dept"] ?? '';
        $session = $_POST["session"] ?? '';
        $email = $_POST["email"] ?? '';
        $phone = $_POST["phone"] ?? '';
        $dob = $_POST["dob"] ?? '';
        $gender = $_POST["gender"] ?? '';
        $courses = $_POST["courses"] ?? [];
        $optional = $_POST["optional"] ?? '';
        $address = $_POST["address"] ?? '';

        $errors = [];

        if (!validateRequiredFields([$name, $roll, $reg, $dept, $session, $email, $phone, $dob, $gender, $optional, $address])) {
            $errors[] = "Please fill in all required fields.";
        }

        if (!validateEmail($email)) {
            $errors[] = "Invalid email format.";
        }

        if (!validatePhone($phone)) {
            $errors[] = "Phone number must be exactly 10 digits.";
        }

        if (count($courses) == 0) {
            $errors[] = "Please select at least one course.";
        }

        if (!empty($errors)) {
            echo "<h3>Errors found:</h3><ul style='color:red;'>";
            foreach ($errors as $err) {
                echo "<li>" . htmlspecialchars($err) . "</li>";
            }
            echo "</ul>";
            echo "<a href='student_form.php'>Go back to form</a>";
            exit;
        }

        echo "<h2>Student Profile Submitted Successfully</h2>";
        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Roll: " . htmlspecialchars($roll) . "<br>";
        echo "Registration No: " . htmlspecialchars($reg) . "<br>";
        echo "Department: " . htmlspecialchars($dept) . "<br>";
        echo "Session: " . htmlspecialchars($session) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Phone: " . htmlspecialchars($phone) . "<br>";
        echo "Date of Birth: " . htmlspecialchars($dob) . "<br>";
        echo "Gender: " . htmlspecialchars($gender) . "<br>";
        echo "Courses: " . htmlspecialchars(implode(", ", $courses)) . "<br>";
        echo "Optional Course: " . htmlspecialchars($optional) . "<br>";
        echo "Address: " . nl2br(htmlspecialchars($address)) . "<br>";
        echo "<br><a href='student_form.php'>Submit another profile</a>";
    } else {
        echo "Invalid request method.";
    }
?>
