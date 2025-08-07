<?php
    include("config.php");

?>


<!DOCTYPE html>
<html lang="eng">
<head>
    <title>Product Form</title>
</head>
<body>
    <form action="product_list.php" method = "POST">
        Name: <input type = "text" name = "name" required> <br><br>
        Category: <input type = "text" name = "category" required> <br><br>
        Brand: <input type = "text" name = "brand" required> <br><br>
        Price: <input type = "number" name = "price" required> <br><br>
        Quantity: <input type = "number" name = "quantity" required> <br><br>
        Description: <textarea name = "description" required></textarea> <br><br>
        <input type = "submit" value = "Submit">
    </form>
    <a href="product_list.php">Go To Product List Page</a>
    <br><br>
</body>
</html>