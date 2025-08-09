<?php
include("config.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "DELETE FROM student WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully. <a href='students_list.php'>Go Back</a>";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}
?>
