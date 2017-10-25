<?php
// -- mysql_update.php
// Database connection establishment
    $con=mysqli_connect("localhost","user01","love123","db_name");
    
// Check connection
    if (mysqli_connect_errno($con)) {
    echo "MySQL database connection failed: " . mysqli_connect_error();
    }

    mysqli_query($con,"UPDATE member SET salary = `12000`
         WHERE FirstName = `Rakdee` AND LastName = `Rakkanrean`");

?>  