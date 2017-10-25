<?php
//--mysql_insert2.php

// กำหนดตัวแปรเพื่อนำไปใช้งาน
$DBhostname = "localhost";
$DBusername = "root";
$DBpassword = "";
$DBname		= "bank_mydb";
$tblname	= "member";


// เริ่มติดต่อฐานข้อมูล
$link = mysqli_connect($DBhostname, $DBusername, $DBpassword, $DBname);
 
// ตรวจสอบการเชื่อมต่อ
if($link === false){
    die("ERROR: ติดต่อฐานข้อมูลไม่ได้ " . mysqli_connect_error());
}
 
// คำสั่ง SQL ในการเพิ่มตาราง
$sql = "INSERT INTO $tblname (id, name, surname, age, email) VALUES
            ('2','Rakdee', 'Nahuntra', 23,'rakdee.n@rmutsb.ac.th'),
            ('3','Suwaschai', 'Punyayarn',24, 'suwaschai.p@rmutsb.ac.th'),
            ('4','Rakdee', 'Nawasukree', 23,'rakdee.na@rmutsb.ac.th'),
            ('5','Thaneeya', 'Boonmalert', 23,'thaneeya.b@rmutsb.ac.th')";
			
// เอ็กซิคิวต์คำสั่ง SQL
if(mysqli_query($link, $sql)){
    echo " เพิ่มข้อมูลเข้าตาราง <font color='red'> $tblname </font> สำเร็จ";
} else{
    echo "ERROR: เอ็กซิคิวต์คำสั่ง SQL ไม่ได้" . mysqli_error($link);
}
 
// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($link);
?>