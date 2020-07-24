<?php
$referer = $_SERVER['HTTP_REFERER'];

setcookie('qq_accesstoken',null);
setcookie('qq_openid',null);
setcookie('orurl',null);



header("Location:$referer");	


