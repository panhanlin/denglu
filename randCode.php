<?php 
session_start();
$width =100;
$height = 30;
$img =imagecreatetruecolor($width, $height);//创建画布
$bg = imagecolorallocate($img, 255, 255, 0);//预先设置背景颜色
$fg = imagecolorallocate($img, 225, 0, 0);//设置前景颜色
imagefill($img, 0, 0, $bg);//把背景颜色添加到画布中
imagestring($img, 5, 5, 5, $_SESSION["code"], $fg);//将随机数写到画布中
header('Content-Type:image/png');//设置输出文件的类型为png
imagepng($img);
 ?>