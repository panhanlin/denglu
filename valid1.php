<?php 
session_start();
header('Content-type:text/html;charset=utf-8');
include("user1.php");
$userInfo =explode("\r",$userString);
$rs =array();
$flag = 0;
foreach ($userInfo as $values ) {
	$userInfos = explode("|", $values);
	$cnt=count($rs);
	$rs[$cnt]["uid"]=$userInfos[0];
	$rs[$cnt]["pwd"]=$userInfos[1];
}
//print_r($rs);
if(isset($_POST["lgnBtn"])){
	$uid =md5(trim($_POST["uid"]));
	$pwd =md5(trim($_POST["pwd"]));
	foreach ($rs as $value) {
		if($uid == trim($value["uid"]) and $pwd == trim($value["pwd"])){
			$flag = 1;
			break;
		}		
	}
	if($flag){
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
