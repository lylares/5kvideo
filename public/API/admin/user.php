<?php

//添加会员
if($a=='add'&&$b=='user')
{
	$uname = $_POST['u_name'];
	$row=$db->getRow("select * from wudu_user where u_name = '$uname'");
	if ($row) {
		exit(callback(0,'会员名已存在，添加失败！'));
	}

	$_data=$_POST;
	
	$_data['u_fav'] = 0;
	$_data['u_plays'] = 0;
	$_data['u_downs'] = 0;
	$_data['u_start'] = date("Y-m-d H:i:s");
	$_data['u_end'] = date("Y-m-d H:i:s");
	$_data['u_regtime'] = date("Y-m-d H:i:s");
	$_data['createip'] = $_POST['ip'];
	$_data['createtime'] = date("Y-m-d H:i:s");
	$_data['createuser'] = $_SESSION['user_name'];

	if(!$_data['u_name']||!$_data['u_password'])
	{
	exit(callback(0,'会员添加失败！'));	
	}
	//$sql = 'insert into wudu_user (' . $str[0] . ') values (' . $str[1] . ')';
	unset($_data['ip']);
	unset($_data['u_cpassword']);
	$res=$db->insert("wudu_user",$_data);

	if ($res) {
		
		exit(callback(1,'会员添加成功！'));
	} else {
		//print_r($conn);
		exit(callback(0,'会员添加失败！'));
	}	
}