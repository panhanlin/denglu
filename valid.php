<?php 
include("vldPage.php")
session_start();
header('Content-type:text/html;charset=utf-8');
include("user.php");
$userInfo =explode("|",$userString);
if(isset($_POST["lgnBtn"])){
	$uid =md5($_POST["uid"]);
	$pwd =md5($_POST["pwd"]);
	if($uid ==$userInfo[0] and $pwd ==$userInfo[1]){
		$_SESSION["uid"] = $uid;
		$_SESSION["time"]= date("Y年m月d日");
		$_SESSION["loginok"] =1;
		echo "<script>alert('您是一个合法用户！');location.href='admin.php';</script>";
	}
	else{
		echo "<script>alert('用户名或密码错误！');location.href='login.php';</script>";
	}		
}
else{
		echo "<script>alert('您还没有登录，请登录！');location.href='login.php';</script>";
	}

 ?>
