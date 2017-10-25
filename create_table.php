<?php
//-- create_table.php
// Database connection establishment
    $con=mysqli_connect("localhost","user01","love123","db_name");
    
// Check connection
    if (mysqli_connect_errno($con)) {
    echo "MySQL database connection failed: " . mysqli_connect_error();
    }

// Create table query 
    $query = "CREATE TABLE users(
     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
     name VARCHAR( 25 ) NOT NULL ,
     last_name VARCHAR( 25 ) NOT NULL ,
     age INT NOT NULL 
     )";

// Execute query
    if (mysqli_query($con,$query)) {
        echo "Table created successfully";
    }else {
        echo "Error in creating table: " . mysqli_error($con);
    }
?>  