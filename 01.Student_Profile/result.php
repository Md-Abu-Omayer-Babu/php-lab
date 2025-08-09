<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <h1>Hello From Result Page</h1>
</body>
</html>

<?php
    include("config.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $dob = $_POST['dob'];
        $department = $_POST['department'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];

        $sql = "INSERT INTO student(name, roll, email, phone, dob, department, gender, address) 
        VALUES('$name', '$roll', '$email', '$phone', '$dob', '$department', '$gender', '$address')";

        if(mysqli_query($conn, $sql)){
            echo "Data inserted successfully!<br><br>";
        } else {
            echo "Error inserting data: " . mysqli_error($conn) . "<br><br>";
        }
    }
    
    $sql = "SELECT * FROM student";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "Name: ". $row['name']. "<br>";
            echo "Roll: " . $row["roll"] . "<br>";
            echo "Email: " . $row["email"] . "<br>";
            echo "Phone: " . $row["phone"] . "<br>";
            echo "DOB: " . $row["dob"] . "<br>";
            echo "Department: " . $row["department"] . "<br>";
            echo "Gender: " . $row["gender"] . "<br>";
            echo "Address: " . $row["address"] . "<br>";

            echo "<br><br><br><br><br>";
        }
    }
    else {
        echo "No records <br>";
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


    mysqli_close($conn);
    echo "<a href='student_form.php'>Go Back</a>";
?>