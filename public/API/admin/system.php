<?php

//更新系统配置
if($a=='update'&&$b=='sysconfig')
{
	$_data= $_POST;

	$res=$db->update("wudu_system",$_data,"id=1");
	if ($res) {
		exit(callback(1,'系统配置修改成功 ！'));
	} else {
		print_r($conn);
		exit(callback(0,'系统配置修改失败。'));
	}
}