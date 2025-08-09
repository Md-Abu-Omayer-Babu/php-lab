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
        echo "<table border='1' cellpadding='8'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>Reg</th>
                    <th>Department</th>
                    <th>Session</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['roll']}</td>
                    <td>{$row['reg']}</td>
                    <td>{$row['dept']}</td>
                    <td>{$row['session']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['gender']}</td>
                    <td>{$row['dob']}</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "No student profiles found.";
    }

    mysqli_close($conn);
?>
