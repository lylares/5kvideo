<?php 
require('init.php');

//mkdir('./data');
//mkdir('./data/runtime');
//mkdir('./data/runtime/child');

$type = htmlspecialchars(getParam('type'));    // 类型
$area = htmlspecialchars(getParam('area'));    // 地区
$letter = htmlspecialchars(getParam('letter'));    // 年代
$pageno = intval(getParam('p', '1'));    // 页码
if(!$pageno)
{ 
$pageno = 1;
}

$query = $type.'&area='.$area.'&letter='.$letter.'&p='.$pageno;

$tvApi = 'http://api.cntv.cn/List/getVideoDocumentary?id=CHAL1460955899450127&serviceId=tvcctv&n=20&type='.$query;
// curl 获取内容

/* $name = 'cntv_child_list_'.md5($tvApi);

$file = RUNTIME.$name;
$gxpd=time()-filemtime($file);

if(!is_file($file))
{
	
	$tvData = GBS::curl($tvApi);
	
	file_put_contents($file, gzdeflate($tvData));
	
}elseif($gxpd>2*60*60){

	$tvData = GBS::curl($tvApi);
	
	file_put_contents($file, gzdeflate($tvData));

		
}

$content = gzinflate(file_get_contents($file)); */
$content = GBS::curl($tvApi);
include('theme/'.$wudu_theme.'/child.php');?>