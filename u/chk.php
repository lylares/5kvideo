<?php  
// 检查用户是否登录  

if(!isset($_SESSION['uid'])||!isset($_COOKIE['uid'])){
  
  $target = $wudu_domain.'u/login.html';
		header("Location: $target");
	};
