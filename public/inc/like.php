<?php

$_url = 'http://www.360kan.com/'.$_GET['type'].'/'.$_GET['id'].'.html';
$like=GBS::curl($_url); 

//print_r($_url);
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
