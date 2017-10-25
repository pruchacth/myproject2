<?php
//--switch01.php
$username="username";
switch($username)
{
	case"manager":
		echo "ยินดีต้อนรับคุณ $username คุณคือผู้จัดการ";
		break;
	case"admin":
		echo "ยินดีต้อนรับคุณ$username  คุณคือผู้ดูแลระบบ";
		break;
	case"webmaster":
		echo "ยินดีต้อนรับคุณ$username  คุณคือผู้ดูแลเว็บไซต์";
		break;
	default:
		echo "ยินดีต้อนรับคุณ $username  คุณคือผู้ใช้งาน";
		
}
?>