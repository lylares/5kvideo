<?php
session_start();
$image = imagecreate(50, 34);
$bcolor = imagecolorallocate($image, 0, 0, 0);
$fcolor = imagecolorallocate($image, 255, 255, 255);
$str = '0123456789';
$code = '';
for ($i = 0; $i < 4; $i++){
	$k = mt_rand(1, strlen($str));
	$code .= $str[$k - 1];
}
$_SESSION['verifycode'] = $code;
$img = imagecreate($width, $height);
$back = imagecolorallocate($img, 255, 220, 230);
$color = imagecolorallocate($img, rand(0,255), rand(0,255), rand(0,255));
$list = str_split(strval($code));
foreach($list as $key => $value){
    $angle = mt_rand(-60, 60);
    imagettftext($img, $size, $angle, $key*$size+$offset, $key+$size+$offset, $color, $font, $value);   
}
for($i = 1; $i < $point; $i ++){
    imagesetpixel($img, rand()%$width, rand()%$height, $color); 
}
for($j = 1; $j < $line; $j ++){
    imageline($img, $line-$j, $size-$j, $width-$line-$j, $height-$line-$j,  $color);
}
header('content-type:image/png');
imagepng($image);
?>
