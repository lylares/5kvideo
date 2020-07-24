<?php


if($a=='user'&&$b=='loginout')
{
$_SESSION = array();
  setcookie('user_name','',time()-3600,'/');
  setcookie('wauth','',time()-3600,'/');
  setcookie('uid','',time()-3600,'/');
  setcookie('user_avatar','',time()-3600,'/');
  session_destroy();
  exit(callback(1,'已安全退出登录!'));
}