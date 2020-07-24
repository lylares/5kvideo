<?php
$fang=$_GET['play']; 
$yuming='http://www.360kan.com';
$jmfang= $yuming.$fang;
$like=curl($jmfang); 
$likezz="#<li  title='(.*?)' class='w-newfigure w-newfigure-(.*?)'><a href='(.*?)'#"; 
$likeimg="#<li  title='(.*?)' class='w-newfigure w-newfigure-(.*?)'><a href='(.*?)'  class='js-link'><div class='w-newfigure-imglink g-playicon js-playicon'> <img src='(.*?)' data-src='(.*?)' alt='(.*?)'  />#"; 
preg_match_all($likezz, $like,$likearr); 
preg_match_all($likeimg, $like,$likearr1); 
$likename=$likearr1[1]; 
$likeurl=$likearr1[3]; 
$likeimg=$likearr1[5]; 

if(count($likename) == 0){
  $likedm1="#<li class='g-clear'([\s\S]*?)</li>#"; 
  preg_match_all($likedm1, $like,$likedmwy1); 
  $likedm2="#<img src=\"(.*?)\" data-src='(.*?)'>#"; 
  $likedm3="#<p class='title'><a href='(.*?)' data-index=(.*?)>(.*?)</a></p>#"; 
  preg_match_all($likedm2, $like,$likedmwy2); 
  preg_match_all($likedm3, $like,$likedmwy3);
  
  $likename=$likedmwy3[3]; 
  $likeurl=$likedmwy3[1]; 
  $likeimg=$likedmwy2[2]; 

  
}
$i=0;
foreach ($likename as $ks=>$vs){
if ($i<12){
$host1=$likeurl[$ks]; 
$hjiami=$host1; 
if ($wudu_wei==1){
$chuandi='../../vod'.$hjiami;
}
else{
$chuandi='./play.php?play='.$hjiami;	
}
	echo "<li class='col-md-6 col-sm-4 col-xs-3'>
<div class='stui-vodlist__box'>
<a title='$vs' class='stui-vodlist__thumb lazyload' href='$chuandi' data-original='$likeimg[$ks]'>
<span class='play hidden-xs'></span>
<span class='pic-text text-right'></span>
</a>
<div class='stui-vodlist__detail padding-0'>
<h4 class='title text-overflow'>
<a title='$vs' href='$chuandi'>$vs</a>
</h4>
<p class='text text-overflow text-muted hidden-xs'></p>
</div>
</div>
</li>";
$i ++;	}							
 } ?>
