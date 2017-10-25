<?php
//-- mysql-where.php

// Create connection
    $con=mysqli_connect("localhost","user01","love123","db_name");
    
// Check connection
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query=mysqli_query($con, "SELECT * FROM member WHERE name='piti' ");
while($data = mysqli_fetch_array($query)){
    echo $data["name"]."<br>";
}
?>