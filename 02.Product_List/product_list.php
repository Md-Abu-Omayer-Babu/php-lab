<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $category = $_POST['category'];
        $brand = $_POST['brand'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $description = $_POST['description'];
    }

    echo "<h2>All Products</h2>";

    echo "Name: " . $name . "<br>";
    echo "Category: " . $category . "<br>";
    echo "Brand: " . $brand . "<br>";
    echo "Price: " . $price . "<br>";
    echo "Quantity: " . $quantity . "<br>";
    echo "Description: " . $description . "<br><br>";
    
    echo "<a href=\"product_form.php\"> Go Back </a>";
?>