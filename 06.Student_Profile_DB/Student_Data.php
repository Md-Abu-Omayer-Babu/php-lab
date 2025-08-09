<?php
    include("config.php");

    // if there no data in your db, first of all insert data in your student table
    /*
        insertion query:

        $sql = "INSERT INTO students (name, roll, email, phone, dob, department, gender, address)
                VALUES ('John Doe', '123', 'john@example.com', '1234567890', '2000-01-01', 'Computer Science', 'Male', '123 Main St')";
        mysqli_query($conn, $sql);
    */

    $sql = "SELECT * FROM student";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Student Profiles</h2>";
        while($row = mysqli_fetch_assoc($result)){
            echo "ID: " . $row['id'] . "<br>";
            echo "Name: " . $row['name'] . "<br>";
            echo "Roll: " . $row['roll'] . "<br>";
            echo "Reg: " . $row['reg'] . "<br>";
            echo "Department: " . $row['dept'] . "<br>";
            echo "Session: " . $row['session'] . "<br>";
            echo "Email: " . $row['email'] . "<br>";
            echo "Gender: " . $row['gender'] . "<br>";
            echo "Date of Birth: " . $row['dob'] . "<br>";
            
            echo "<hr>"; // divider line (horizontal line) ---> optional
        }
    
    }

    mysqli_close($conn);
?>
