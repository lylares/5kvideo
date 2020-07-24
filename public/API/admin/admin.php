<?php

//管理员添加
if($a=='add'&&$b=='admin')
{
	if(!isset($_SESSION['user_name']))
	{
		exit(callback(2,'you have no permission !'));
	}
	if($_SESSION['user_name'] !=='supermanager')
	{
		exit(callback(2,'you have no permission !'));
	}
	if(!$_POST['m_name']||!$_POST['m_password'])
	{
		exit(callback(2,'you have no permission !'));
	}

	$row=$db->getRow('select * from wudu_manager where m_name = "' . $_POST['m_name'] . '"');
	
	if ($row) {
		exit(callback(0,'帐号已存在！'));
	}
	$_data = $_POST;
	unset($_data['id']);unset($_data['m_cpassword']);
	$_data['m_password'] = md5($_POST['m_password']);
	$_data['m_status'] = 1;
	$_data['createtime'] = date("Y-m-d H:i:s");
	$_data['createuser'] = $_SESSION['user_name'];
	$_data['createip']= $_POST['ip'];
	unset($_data['ip']);
	//$sql = 'insert into wudu_manager (' . $str[0] . ') values (' . $str[1] . ')';
	$res=$db->insert("wudu_manager",$_data);
	if ($res) {
		exit(callback(1,'管理员帐号添加成功！'));
	} else {
		exit(callback(0,'管理员帐号添加失败！'));
	}
//管理员删除	
}
if($a=='del'&&$b=='admin')
{
	if ($_GET['del'] == 1) {
	exit(callback(0,'管理员帐号删除失败！'));
} else {
	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		$del=$db->deleteOne("wudu_manager","m_id=$id");
		if ($del) {
			exit(callback(1,'管理员帐号删除成功！'));
		} else {
			exit(callback(0,'管理员帐号删除失败！'));
			
		}
	}
}
//更新管理员
}
if($a=='update'&&$b=='admin')
{

	$row=$db->getRow('select * from wudu_manager where m_name = "' . $_POST['m_name'] . '" and m_id = ' . $_POST['id'] . '');
	
	if ($row) {
	
    if(md5($_POST['m_password'])==$row['m_password'])
    {
	   $_data['m_name'] = $_POST['m_name'];
	   $_data['m_password'] = md5($_POST['m_password']);
	   $id = $_POST['id'];
	   $res=$db->update("users",$_data,"m_id=$id");
	   if ($res) {
		exit(callback(1,'管理员帐号更新成功！'));
	  } else {
		exit(callback(0,'管理员帐号更新失败！'));
	  }
    }else{
		exit(callback(0,'管理员帐号更新失败！'));
	}	
	
    }else{
		exit(callback(0));
	}

}