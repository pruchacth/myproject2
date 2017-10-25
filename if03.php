<?php
//--if03.php
$name="admin";
if($name=="manager")
	{
		echo "ยินดีต้อนรับคุณ <font color='red'> $name </font> คนคือผู้จัดการ";
		echo "<a href='http://www.Pruch.com' >ไปเว็บ Pruch.com</a>";
		
	}elseif ($name=="admin")
	{
		echo "ยินดีต้อนรับคุณ<font color='green'> $name </font> คุณคือผู้ดูแลระบบ";
		echo "<a href='http://www.rmutsb.ac.th' >ไปเว็บrmutsb.ac.th</a>";
		
	}elseif ($name=="webmaster")
	{
		echo "ยินดีต้อนรับคุณ<font color='blue'> $name </font> คุณคือผู้ดูแลเว็บไซต์";
	}else
	{
		echo "ยินดีต้อนรับคุณ<font color='orange'> $name </font> คุณคือผู้ใช้งาน";
	}	
	
?>

	