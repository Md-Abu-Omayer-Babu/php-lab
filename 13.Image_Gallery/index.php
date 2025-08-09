<?php
    include("config.php");

    // Handle Image Upload
    if (isset($_POST['upload'])) {
        $title = trim($_POST['title']);

        // File Upload
        $image = $_FILES['image']['name'];
        $target = "upload/" . basename($image);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $sql = "INSERT INTO gallery (title, image_path) 
                    VALUES ('$title', '$target')";

            mysqli_query($conn, $sql);
            echo "<p style='color:green;'>Image uploaded successfully!</p>";
        } else {
            echo "<p style='color:red;'>Failed to upload image.</p>";
        }
    }
?>

<h2>Upload Image</h2>
<form method="POST" enctype="multipart/form-data">
    Title: <input type="text" name="title" required><br><br>
    Select Image: <input type="file" name="image" accept="image/*" required><br><br>
    <input type="submit" name="upload" value="Upload">
</form>

<hr>
<h2>Image Gallery</h2>
<div style="display:flex; flex-wrap:wrap; gap:10px;">
    <?php
        $sql = "SELECT * FROM gallery ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div style='text-align:center; border:1px solid #ccc; padding:10px;'>
                    <img src='{$row['image_path']}' width='200' style='display:block; margin:auto;'>
                    <p>{$row['title']}</p>
                </div>";
        }
    ?>
</div>
