<?php 
session_start();
if(!isset($_SESSION["loginok"])){


echo "<script>alert('您还没有登录，请登录！');location.href='login.php';</script>";
	
}
 ?>
