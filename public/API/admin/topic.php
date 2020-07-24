<?php
if($a=='add'&&$b=='topic')
{
	$_data = $_POST;
    $_data['createtime'] = date("Y-m-d H:i:s");
	if(!$_data['name']||!$_data['alias']||!$_data['cover'])
	{
	exit(callback(0,'添加话题失败'));	
	
	}
	$str = arrtoinsert($_data);
	if ($res=$db->insert("wudu_topic",$_data)) {
		exit(callback(1,'添加话题成功'));
	} else {
		exit(callback(0,'添加话题失败'));
	}
//删除话题
}
if($a=='del'&&$b=='topic')
{
    $id = $_POST['id'];
	
	if(!id)
	{
	exit(callback(0,'删除话题失败'));	
	}
	$res=$db->deleteOne("wudu_topic","id=$id");
	if ($res) {
		exit(callback(1,'删除话题成功'));
	} else {
		exit(callback(0,'删除话题失败'));
	}
//更新话题	
}
if($a=='update'&&$b=='topic')
{
	$_data= $_POST;
    $_data['createtime'] = date("Y-m-d H:i:s");
	if(!$_data['name']||!$_data['alias']||!$_data['cover'])
	{
	exit(callback(0,'更新话题失败'));	
	
	}
	//$sql = 'update wudu_topic set ' . arrtoupdate($_data) . ' where id = ' . $_POST['id'] . '';
	$id = $_POST['id'];
	$res=$db->update("wudu_vod",$_data,"id=$id");
	if ($res) {
		exit(callback(1,'更新话题成功'));
	} else {
		exit(callback(0,'更新话题失败'));
	}
//添加话题分类	
}
if($a=='add'&&$b=='topic_cat')
{
	$_data= $_POST;
    $_data['createtime'] = date("Y-m-d H:i:s");
	if(!$_data['name']||!$_data['tid'])
	{
	exit(callback(0,'添加话题失败'));	
	
	}
	$str = arrtoinsert($_data);
	$res=$db->insert("wudu_topic_cat",$_data);
	if ($res) {
		exit(callback(1,'添加话题成功'));
	} else {
		exit(callback(0,'添加话题失败'));

		}
//删除话题分类		
}
if($a=='del'&&$b=='topic_cat')
{
    $id = $_POST['id'];
	if(!id)
	{
	exit(callback(0,'删除话题分类失败'));	
	}
	$res=$db->deleteOne("wudu_topic_cat","id=$id");
	if ($res) {
		exit(callback(1,'删除话题分类成功'));
	} else {
		exit(callback(0,'删除话题分类失败'));
	}
//更新话题分类	
}
if($a=='update'&&$b=='topic_cat')
{
	$_data= $_POST;
    $_data['createtime'] = date("Y-m-d H:i:s");
	if(!$_data['name']||!$_data['tid'])
	{
	exit(callback(0,'更新话题分类失败'));	
	
	}
	//$sql = 'update wudu_topic_cat set ' . arrtoupdate($_data) . ' where id = ' . $_POST['id'] . '';
	$id = $_POST['id'];
	$res=$db->update("wudu_topic_cat",$_data,"id=$id");
	if ($res) {
		exit(callback(1,'更新话题分类成功'));
	} else {
		exit(callback(0,'更新话题分类失败'));
	}
//添加话题详情
}
if($a=='add'&&$b=='topic_detail')
{
	$_data = $_POST;
	if(!$_data['aid'])
	{
	$_data['aid'] = $_POST['aid1'];	
	}
    $_data['createtime'] = date("Y-m-d H:i:s");
	if(!$_data['cid']||!$_data['aid']||!$_data['type']||!$_data['mtype'])
	{
	exit(callback(0,'添加话题失败'));	
	
	}
	$str = arrtoinsert($_data);
	$res=$db->insert("wudu_topic_detail",$_data);
	if ($res) {
		exit(callback(1,'添加话题成功'));
	} else {
		exit(callback(0,'添加话题失败'));
	}
}