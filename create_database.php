<?php
// -- create_database.php
// Database connection establishment
     $con=mysqli_connect("localhost","user01","love123","db_name");
    
// Check connection
    if (mysqli_connect_errno($con)) {
    echo "MySQL database connection failed: " . mysqli_connect_error();
    }

// Create database
    if (mysqli_query($con,"CREATE DATABASE my_database")) {
        echo "Database created successfully";
    }else {
        echo "Error in creating database: " . mysqli_error($con);
    }
?>  