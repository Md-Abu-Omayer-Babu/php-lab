<?php
    include("config.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $dept = $_POST['department'];
        $position = $_POST['position'];
        $salary = $_POST['salary'];
        $hire_date = $_POST['hire_date'];
        $address = $_POST['address'];

        $sql = "INSERT INTO (fullname, email, phone, dept, position, salary, hire_date, address)
                VALUES($fullname, $email, $phone, $dept, $position, $salary, $hire_date, $address)";
        
        if(mysqli_query($conn, $sql)){
            echo "Insertion successfull!";
        }else{
            echo "Insertion Error!";
        }
    }


    mysqli_close($conn);

?>