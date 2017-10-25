<?php
// -- mysqlcon.php
// Create connection
 $con=mysqli_connect("localhost","user01","love123","db_name");
 
// Check connection
 if (mysqli_connect_errno($con)) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

// Close Connection
 mysqli_close($con);
?> 