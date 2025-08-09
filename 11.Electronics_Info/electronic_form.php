<!DOCTYPE html>
<html>
<head>
    <title>Electronics Product Form</title>
</head>
<body>
    <h2>Enter Electronics Product Information</h2>
    <form action="store_product.php" method="post">
        Product Name: <input type="text" name="name" required><br><br>
        Brand: <input type="text" name="brand" required><br><br>
        Category: <input type="text" name="category" required><br><br>
        Price: <input type="number" name="price" step="0.01" required><br><br>
        Quantity: <input type="number" name="quantity" required><br><br>
        Warranty (months): <input type="number" name="warranty" required><br><br>
        Description: <textarea name="description" required></textarea><br><br>
        Supplier: <input type="text" name="supplier" required><br><br>
        <input type="submit" value="Save Product">
    </form>
</body>
</html>
