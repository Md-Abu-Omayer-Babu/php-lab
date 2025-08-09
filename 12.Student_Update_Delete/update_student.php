<?php
include("config.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Fetch student data
    $sql = "SELECT * FROM student WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
    } else {
        die("Student not found!");
    }
}

// Handle form submission
if (isset($_POST['update'])) {
    $name    = trim($_POST['name']); // Use trim to remove whitespace
    $roll    = trim($_POST['roll']);
    $reg     = trim($_POST['reg']);
    $dept    = trim($_POST['dept']);
    $session = trim($_POST['session']);
    $email   = trim($_POST['email']);
    $gender  = trim($_POST['gender']);
    $dob     = $_POST['dob'];

    $sql = "UPDATE student
            SET name='$name', roll='$roll', reg='$reg', dept='$dept', session='$session',
                email='$email', gender='$gender', dob='$dob'
            WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully. <a href='students_list.php'>Go Back</a>";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<h2>Update Student</h2>
<form action="" method="post">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br><br>
    Roll: <input type="text" name="roll" value="<?php echo $row['roll']; ?>" required><br><br>
    Reg: <input type="text" name="reg" value="<?php echo $row['reg']; ?>" required><br><br>
    Department: <input type="text" name="dept" value="<?php echo $row['dept']; ?>" required><br><br>
    Session: <input type="text" name="session" value="<?php echo $row['session']; ?>" required><br><br>
    Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
    Gender: 
        <select name="gender" required>
            <option value="Male" <?php if ($row['gender'] == "Male") echo "selected"; ?>>Male</option>
            <option value="Female" <?php if ($row['gender'] == "Female") echo "selected"; ?>>Female</option>
        </select><br><br>
    DOB: <input type="date" name="dob" value="<?php echo $row['dob']; ?>" required><br><br>
    
    <input type="submit" name="update" value="Update">
</form>
