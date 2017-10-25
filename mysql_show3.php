<?php
//-- mysql_show3.php
// Create connection
    $con=mysqli_connect("localhost","user01","love123","db_name");
    
// Check connection
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

    $query=mysqli_query($con, "SELECT * FROM contact");
?>

<table border='1'><tr>
    <th>Firstname</th>
    <th>Lastname</th>
</tr>

<?php while($data = mysqli_fetch_array($query)){ ?>
<tr>
    <td><?php echo $data["name"]; ?></td>
    <td><?php echo $data["email"]; ?></td>
    <td><?php echo $data["message"]; ?></td>
</tr>
<?php } ?>

</table>
