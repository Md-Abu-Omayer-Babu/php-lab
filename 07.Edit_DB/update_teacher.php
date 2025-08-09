<?php
    include("config.php");

    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);

        // Fetch teacher data
        $sql = "SELECT * FROM teachers WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
        } else {
            die("Teacher not found!");
        }
    }

    // Handle form submission
    if (isset($_POST['update'])) {
        $id = intval($_POST['id']); // Make sure to include hidden id in form
        
        $fullname   = trim($_POST['fullname']);
        $email      = trim($_POST['email']);
        $phone      = trim($_POST['phone']);
        $department = trim($_POST['department']);
        $subject    = trim($_POST['subject']);
        $salary     = floatval($_POST['salary']);
        $hire_date  = $_POST['hire_date'];
        $address    = trim($_POST['address']);

        $sql = "UPDATE teachers
                SET fullname='$fullname',
                    email='$email',
                    phone='$phone',
                    department='$department',
                    subject='$subject',
                    salary=$salary,
                    hire_date='$hire_date',
                    address='$address'
                WHERE id=$id";

        if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully. <a href='edit_form.php'>Go Back to List</a>";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
?>

<h2>Update Teacher</h2>

<form action="" method="post">
    <input type="hidden" name="id" value="<?php echo ($row['id']); ?>">

    Full Name: <input type="text" name="fullname" value="<?php echo ($row['fullname']); ?>" required><br><br>
    Email: <input type="email" name="email" value="<?php echo ($row['email']); ?>" required><br><br>
    Phone: <input type="text" name="phone" value="<?php echo ($row['phone']); ?>" required><br><br>
    Department: <input type="text" name="department" value="<?php echo ($row['department']); ?>" required><br><br>
    Subject: <input type="text" name="subject" value="<?php echo ($row['subject']); ?>" required><br><br>
    Salary: <input type="number" step="0.01" name="salary" value="<?php echo ($row['salary']); ?>" required><br><br>
    Hire Date: <input type="date" name="hire_date" value="<?php echo ($row['hire_date']); ?>" required><br><br>
    Address: <textarea name="address" required><?php echo ($row['address']); ?></textarea><br><br>

    <input type="submit" name="update" value="Update">
</form>
