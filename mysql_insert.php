<?php
//-- mysql_insert.php
// Database connection establishment
    $con=mysqli_connect("localhost","user01","love123","db_name");
    
// Check connection
    if (mysqli_connect_errno($con)) {
    echo "MySQL database connection failed: " . mysqli_connect_error();
    }

// Insert
    mysqli_query($con,"INSERT INTO member (name,email,message)
        VALUES (Alex, 'alex@example.com', 'Sample message')")

?>  