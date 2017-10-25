<?php
//-- mysql_show.php
// Create connection
    $con=mysqli_connect("localhost","user01","love123","mydb");
    
// Check connection
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

    $query=mysqli_query($con, "SELECT * FROM contact");
    $data = mysqli_fetch_array($query);
    echo $data["name"];
?>