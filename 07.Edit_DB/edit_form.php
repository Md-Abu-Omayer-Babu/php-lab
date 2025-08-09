<?php
    include "config.php";

    $sql = "SELECT * FROM teachers";
    $result = mysqli_query($conn, $sql);
?>

<h2>Teachers List</h2>
<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Department</th>
        <th>Subject</th>
        <th>Salary</th>
        <th>Hire Date</th>
        <th>Address</th>
        <th>Actions</th>
    </tr>

    <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['fullname']) . "</td>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
            echo "<td>" . htmlspecialchars($row['department']) . "</td>";
            echo "<td>" . htmlspecialchars($row['subject']) . "</td>";
            echo "<td>" . htmlspecialchars($row['salary']) . "</td>";
            echo "<td>" . htmlspecialchars($row['hire_date']) . "</td>";
            echo "<td>" . htmlspecialchars($row['address']) . "</td>";
            echo "<td><a href='update_teacher.php?id=" . $row['id'] . "'>Edit</a></td>";
            echo "</tr>";
        }
    ?>
</table>
