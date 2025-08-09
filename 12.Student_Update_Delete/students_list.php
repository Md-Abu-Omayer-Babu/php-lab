<?php
    include("config.php");

    $sql = "SELECT * FROM student";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Students' Profiles</h2>";
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
                    <th>Actions</th>
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
                    <td>
                        <a href='update_student.php?id={$row['id']}'>Update</a> |
                        <a href='delete_student.php?id={$row['id']}' onclick='return confirm(\"Are you sure?\");'>Delete</a>
                    </td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "No student records found.";
    }

    mysqli_close($conn);
?>
