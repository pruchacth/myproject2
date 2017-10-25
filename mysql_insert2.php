<?php
//-- mysql_insert2.php
// Database connection establishment
   $con=mysqli_connect("localhost","user01","love123","db_name");
    
// Check connection
    if (mysqli_connect_errno($con)) {
        echo "MySQL database connection failed: " . mysqli_connect_error();
    }

//CHECKING SUBMIT BUTTON PRESS or NOT.
    if(isset($_POST["submitBtn"]) && $_POST["submitBtn"]!=""){ 
        $name=$_POST["name"];
        $email=$_POST["email"];
        $message=$_POST["message"];

//INSERT QUERY
    if(mysqli_query("INSERT INTO member (name, email, message)
        VALUES ($name,$email,$message)")){
        echo "Record inserted successfully";
    }}
?>  