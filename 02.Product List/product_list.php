<?php
    include("config.php");

    if(isset($_POST['name']) && isset($_POST['category']) && isset($_POST['brand']) && isset($_POST['price']) && isset($_POST['quantity']) && isset($_POST['description'])) {
        $name = $_POST['name'];
        $category = $_POST['category'];
        $brand = $_POST['brand'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $description = $_POST['description'];

        $sql = "INSERT INTO product(name, category, brand, price, quantity, description)
        VALUES('$name', '$category', '$brand', '$price', '$quantity', '$description')";

        try{
            if(mysqli_query($conn, $sql)){
                echo "Data inserted successfully!<br><br>";
            }
        } catch(mysqli_sql_exception $e){
            echo "Error inserting data: " . $e->getMessage() . "<br><br>";
        }

    }
    $sql = "SELECT * FROM product";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "Name: " . $row['name'] . "<br>";
            echo "Category: " . $row['category'] . "<br>";
            echo "Brand: " . $row['brand'] . "<br>";
            echo "Price: " . $row['price'] . "<br>";
            echo "Quantity: " . $row['quantity'] . "<br>";
            echo "Description: " . $row['description'] . "<br><br>";
        }
    }else{
        echo "No records found.<br>";
    }
    
    echo "<a href=\"product_form.php\"> Go Back </a>";
?>