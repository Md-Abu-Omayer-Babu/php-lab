<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $profession = $_POST['profession'];
        $country = $_POST['country'];
        $about = $_POST['about'];
    }

    echo "<h2>Personal Profile</h2>";

    echo "Full Name: " . htmlspecialchars($fullname) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Date of Birth: " . htmlspecialchars($dob) . "<br>";
    echo "Phone: " . htmlspecialchars($phone) . "<br>";
    echo "Address: " . htmlspecialchars($address) . "<br>";
    echo "Profession: " . htmlspecialchars($profession) . "<br>";
    echo "Country: " . htmlspecialchars($country) . "<br>";
    echo "About Me: " . nl2br(htmlspecialchars($about)) . "<br><br>";

    echo '<a href="profile_form.php">Go Back</a>';
?>
