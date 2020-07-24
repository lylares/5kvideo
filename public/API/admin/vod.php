<?php

//视频添加
if($a=='add'&&$b=='vod')
{
	$_data = $_POST;
	$name = $_POST['name'];
	$row=$db->getRow('select * from wudu_vod where name = "' . $_POST['name'] . '"');
	
	if ($row) {
		$res=$db->update("wudu_vod",$_data,"name='$name'");
		
		exit(callback(1,'视频更新成功'));
	}
	
	$pid = new randomString(14, randomString::MIXED, TRUE);
	
	$_data['pid'] = $pid;

	if(!$_data['name']||!$_data['picture']||!$_data['content'])
	{
	exit(callback(0,'视频添加失败'));	
	}
	$res=$db->insert("wudu_vod",$_data);
	if ($res) {
		exit(callback(1,'视频添加成功'));
	} else {
		exit(callback(0,'视频添加失败'));
	}
//视频编辑	
}
if($a=='update'&&$b=='vod')
{
	$pid = $_GET['pid'];
	$_data= $_POST;
	$res=$db->update("wudu_vod",$_data,"pid=$pid");
	if ($res) {
		exit(callback(1,'视频更新成功'));
	} else {
		exit(callback(0,'视频更新失败'));
	}	
}