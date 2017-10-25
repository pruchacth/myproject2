<?php
// -- mysql_orderby.php
// Database connection establishment
    $con=mysqli_connect("localhost","user01","love123","db_name");
    
// Check connection
if (mysqli_connect_errno($con)) {
    echo "MySQL database connection failed: " . mysqli_connect_error();
}


$query = mysqli_query($con,"SELECT * FROM member ORDER BY salary");    

while($row = mysqli_fetch_array($query)) {
    echo $row["FirstName"]." ".$row["LastName"]." ".$row["salary"]."<br>";
}
?>