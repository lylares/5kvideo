<?php 
require('init.php');
if(isset($_POST['submit'])){
null_back($_POST['username'],'请输入姓名');
	null_back($_POST['content'],'请输入内容');
	$data['userid'] = $_POST['username'];
	$data['content'] =addslashes($_POST['content']);
	$data['time'] =date('y-m-d h:i:s',time());
	
	$str = arrtoinsert($data);
		$sql = 'insert into wudu_book ('.$str[0].') values ('.$str[1].')';
	if(mysqli_query($conn,$sql)){

alert_href('留言成功!','gustbook.php');
}
else{
alert_back('注册失败');
	}
	
	
}
include('theme/'.$wudu_theme.'/gustbook.php');