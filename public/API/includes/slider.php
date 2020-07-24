<?php

//添加轮播图	
if($a=='add'&&$b=='slider')
{
	$_data=$_POST;
	
	$_data['parent'] = 1;
	$position = implode(",",$_POST['position']);
	$vid= $_POST['vid'];
	if($vid){
	$_data['url'] =	$vid.'.html';
	}

	$_data['position'] = $position;

	if(!$_data['name']||!$_data['sorder']||!$_data['url']||!$_data['picture'])
	{
	exit(callback(0,'添加轮播图失败！'));	
	}
	unset($_data['vid']);
	$res=$db->insert("wudu_slideshow",$_data);
	if ($res) {
		$order = mysqli_insert_id();
		if ($_POST['sorder'] == 0) {
			//mysqli_query($conn,'update wudu_slideshow set order = ' . $order . ' where id = ' . $order);
			$res=$db->update("wudu_slideshow",$_POST['sorder'],"id=$order");
		}
		exit(callback(1,'添加轮播图成功！'));
	} else {
		exit(callback(0,'添加轮播图失败！'));
	}
	
//删除轮播图
}
if($a=='del'&&$b=='slider')
{
    //$sql = 'delete from wudu_slideshow where id = ' .  . '';
	$id= $_POST['id'];
	$res=$db->deleteOne("wudu_slideshow","id=$id");
	if(!id)
	{
	exit(callback(0));	
	}
	if ($res) {
		exit(callback(1,'删除轮播图成功！'));
	} else {
		exit(callback(0,'删除轮播图失败！'));
	}
//更新轮播图	
}
if($a=='update'&&$b=='slider')
{
	$id = $_POST['id'];
	$_data=$_POST;
	
	$position = implode(",",$_POST['position']);
	
	$_data['position'] = $position;
	
	$vid= $_POST['vid'];
	if($vid){
	unset($_data['url']);
	$_data['url'] =	$vid.'.html';
	}
     
	 //print_r($_data);
	 
	if(!$_data['name']||!$_data['sorder']||!$_data['url']||!$_data['picture']||!$_POST['id'])
	{
	exit(callback(2,'you have no permission !'));	
	
	}
	
	//$sql = 'update wudu_slideshow set ' . arrtoupdate($_data) . ' where id = ' . $_POST['id'] . '';
	unset($_data['vid']);
	$res=$db->update("wudu_slideshow",$_data,"id=$id");
	if ($res) {
		exit(callback(1,'更新轮播图成功'));
	} else {
		exit(callback(0,'更新轮播图失败'));
	}
//轮播图快速上下线
}
if($a=='update'&&$b=='sliderStatus')
{
	
	$id = $_POST['id'];
	if(!isset($_POST['status'])||!$_POST['status']||$_POST['id'])
	{
	exit(callback(0,'轮播图上线失败'));	
	}
	$_data['status'] = $_POST['status'];
	$res=$db->update("wudu_slideshow",$_data,"id=$id");
	if (mysqli_query($conn,$sql)) {
		exit(callback(1,'轮播图上线成功'));
	} else {
		exit(callback(0,'轮播图上线失败'));
	}
}