<?php
header("content-type:image/jpeg");
$im=imagecreatefromjpeg("images/photo.jpg");
$textcolor=imagecolorallocate($im,56,75,136);
$fnt="c:/windows/fonts/simhei.ttf";
$motto=iconv("gb2312","utf-8","����ɽ������");
imagettftext($im,220,0,480,340,$textcolor,$fnt,$motto);
imagejpeg($im);
imagedestroy($im);