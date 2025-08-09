<?php
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Trim inputs
    $fullname = trim($_POST['fullname'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $department = trim($_POST['department'] ?? '');
    $position = trim($_POST['position'] ?? '');
    $salary = trim($_POST['salary'] ?? '');
    $hire_date = trim($_POST['hire_date'] ?? '');
    $address = trim($_POST['address'] ?? '');

    // Validate Full Name
    if (empty($fullname)) {
        $errors[] = "Full Name is required.";
    }

    // Validate Email
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Validate Phone (10 digits)
    if (empty($phone)) {
        $errors[] = "Phone number is required.";
    } elseif (!preg_match('/^\d{10}$/', $phone)) {
        $errors[] = "Phone number must be exactly 10 digits.";
    }

    // Validate Department
    if (empty($department)) {
        $errors[] = "Department is required.";
    }

    // Validate Position
    if (empty($position)) {
        $errors[] = "Position is required.";
    }

    // Validate Salary (positive number)
    if (empty($salary)) {
        $errors[] = "Salary is required.";
    } elseif (!is_numeric($salary) || $salary <= 0) {
        $errors[] = "Salary must be a positive number.";
    }

    // Validate Hire Date
    if (empty($hire_date)) {
        $errors[] = "Hire Date is required.";
    } elseif (!strtotime($hire_date)) {
        $errors[] = "Invalid hire date.";
    }

    // Validate Address
    if (empty($address)) {
        $errors[] = "Address is required.";
    }

    // Show errors or success message
    if (!empty($errors)) {
        echo "<h3>Errors found:</h3><ul>";
        foreach ($errors as $error) {
            echo "<li>" . htmlspecialchars($error) . "</li>";
        }
        echo "</ul>";
        echo '<a href="employee_form.php">Go Back</a>';
    } else {
        echo "<h3>Employee data is valid!</h3>";
        // Here you can proceed with saving data or further processing
    }
} else {
    echo "Invalid request.";
}
?>
