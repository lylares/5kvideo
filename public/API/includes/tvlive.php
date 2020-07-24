<?php

//添加电视直播	
if($a=='add'&&$b=='tvlive')
{
	$_data = $_POST;
	$_data['pid'] = new randomString(14, randomString::MIXED, TRUE);
	
	//print_r($_data);die;

	if(!$_data['name']||!$_data['img']||!$_data['url'])
	{
	exit(callback(0,'直播添加失败'));	
	}
	$res=$db->insert("wudu_tvlive",$_data);
	if ($res) {
		exit(callback(1,'直播添加成功'));
	} else {
		exit(callback(0,'直播添加失败'));
	}
}

//删除

if($a=='del'&&$b=='tvlive')
{
    //$sql = 'delete from wudu_slideshow where id = ' .  . '';
	$id= $_POST['id'];
	$res=$db->deleteOne("wudu_tvlive","id=$id");
	if(!id)
	{
	exit(callback(0));	
	}
	if ($res) {
		exit(callback(1,'直播删除成功！'));
	} else {
		exit(callback(0,'直播删除失败！'));
	}
	
}

//更新	
if($a=='update'&&$b=='tvlive')
{
	$id= $_POST['id'];
	$vid = $_POST['vid'];
	$_data =$_POST;
	if($vid)
	{
		unset($_data['url']);
	$_data['url'] = $vid.'.html';	
	}
	if(!$_data['name']||!$_data['img']||!$_data['url'])
	{
	exit(callback(0,'直播更新失败'));	
	}

	unset($_data['vid']);
	$res=$db->update("wudu_tvlive",$_data,"id=$id");

	if ($res) {
		exit(callback(1,'直播更新成功'));
	} else {
		exit(callback(0,'直播更新失败'));
	}
}