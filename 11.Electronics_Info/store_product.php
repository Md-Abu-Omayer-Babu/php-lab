<?php
    include("config.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name        = $_POST['name'];
        $brand       = $_POST['brand'];
        $category    = $_POST['category'];
        $price       = $_POST['price'];
        $quantity    = $_POST['quantity'];
        $warranty    = $_POST['warranty'];
        $description = $_POST['description'];
        $supplier    = $_POST['supplier'];

        $sql = "INSERT INTO products (name, brand, category, price, quantity, warranty, description, supplier)
                VALUES ('$name', '$brand', '$category', '$price', '$quantity', '$warranty', '$description', '$supplier')";

        if(mysqli_query($conn, $sql)){
            echo "Product information saved successfully!";
        }else{
            echo "Error: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
?>
