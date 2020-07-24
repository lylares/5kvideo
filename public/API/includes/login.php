<?php

//登录
if($a=='user'&&$b=='login')
{
	$u_name = $_POST['u_name'];
	$u_password = $_POST['u_password'];
	
	if(!isset($_POST['u_name'])||!isset($_POST['u_password'])||!$u_name||!$u_password )
	{
		exit(callback(2,'you have no permission !'));
	}
	$sql = 'select * from wudu_manager where m_name = "'.$u_name.'" and m_password = "'.md5($u_password).'"';
	
	$row=$db->getRow($sql);

	if($row)
	{
		$_SESSION['user_name'] = $u_name;
		exit(callback(1,'登录成功 ！'));
		
	}else{
		exit(callback(0,'系统错误,请稍后再试！'));
	}
//登出
}
if($a=='user'&&$b=='loginout')
{
	$u_name = $_POST['u_name'];
	
	if(!$u_name)
	{
		exit(callback(2,'系统错误,请稍后再试！'));
	}
	unset($_SESSION['user_name']);
		exit(callback(1,'已安全退出登录!'));
}