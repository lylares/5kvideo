<?php 
	define('WWWPATH',$_SERVER['DOCUMENT_ROOT'].'/');  //定义网站根目录D:/www/格式
	define('COOKIE_PATH',WWWPATH.'data/cookie/');	  //cookie目录
	define('INCLUDE_PATH',WWWPATH.'data/include/');	  //要读取数据文件的目录
	define('LOG_PATH',WWWPATH.'data/log/');			  //log日志目录
	define('UPLOAD_TEMP_PATH',WWWPATH.'data/upload/');//上传文件目录
	define('PPTV_TEMP_PATH',WWWPATH.'data/pptv/');//上传文件目录
	define('PROXY','61.183.152.82');			  //代理服务器地址   http://www.ip181.com/   139.224.135.94:80  http://www.xicidaili.com/

	#当前文件相对目录  $_SERVER['PHP_SELF'] $_SERVER['SCRIPT_NAME'];
	define('PATH',str_replace(basename($_SERVER['REQUEST_URI']),'',$_SERVER['REQUEST_URI']));
	
	define('SITE','');//防盗链域名地址，多个地址用|分割，设置为空表示不防盗链

	#以下设置 腾讯 VIP cookie
	define('COOKIE_VQQ','RK=OjiQRo24WQ;ptcz=358fa25500bfea772c6bff4eec44328fce7316d7eabe5460c868576f9b76cb95;');

	#以下设置 QQ空间 微云 cookie
	define('COOKIE_QQ','uin=o0526399475; skey=@XgYVKE6gK; p_skey=0D-SUfEuwIEaIWA*EkioNmwQU5Tt54UhXtDgJQa7Dik_;');//uin skey p_skey属于QQ空间、微云共用参数

	#以下设置 爱奇艺 VIP cookie
	define('COOKIE_IQIYI','P00001=b0uul7wX9rIkVDpXzDDPKM3p4Cu5D8wOCdOI4FG3f2MbBfsqicf3iLPXm36s3m3zrUXD17;');

	#以下设置 芒果TV VIP cookie
	define('COOKIE_MGTV','loginAccount=jia997684%40163.com; HDCN=0NGW8935XXJPPVHU273A-723876755;');
	
	#以下设置 搜狐 VIP cookie
	define('COOKIE_SOHU','ppinf= SOHUSVP=');
	
	#以下设置 优酷 VIP cookie
	define('COOKIE_YOKU','yktk=AgADAAD%2F%2F%2F%2F%2FAAAA%7C1513332278%7C15%7CaWQ6MTM1ODAzNzYzMyxubjrohb7orq%2FnlKjmiLcxNTEzMzMyMjc4MjkyNDMxLHZpcDpmYWxzZSx5dGlkOjEzNTgwMzc2MzMsdGlkOjA%3D%7C85923f6053853d579a90f05dfc0811cb%7Cd6887557de108f531a0a2862dcea4a8321b2eaef%7C1;');

	#以下设置 暴风影音 VIP cookie 
	define('COOKIE_BAOFENG','');

	#以下设置 PPTV VIP cookie 
	define('COOKIE_PPTV','');

	#以下设置 华数 VIP cookie ，未测试，不知道支不支持
	define('COOKIE_WASU','');

	#以下设置 天天看看 VIP cookie ，未测试，不知道支不支持
	define('COOKIE_KANKAN','');

	#以下设置 M1905电影网 VIP cookie
	define('COOKIE_M1905','WOlTvIlgRpmauth=');

	#以下设置 乐视 VIP cookie 
	define('COOKIE_LE','');
	
    #以下设置 ACfun cookie 
	define('COOKIE_ACFUN','');
     
	#以下设置 blibli cookie 
	define('COOKIE_BILIBILI','');
