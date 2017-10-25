<?php
// Create connection
    $con=mysqli_connect("localhost","root","sysadmin","arnutdb");
    
// Check connection
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

    $query=mysqli_query($con, "SELECT * FROM member");
    $data = mysqli_fetch_array($query);
    echo $data["id"]; echo"<br>";
	   echo $data["name"]; echo"<br>";
	      echo $data["surname"]; echo"<br>";
?>