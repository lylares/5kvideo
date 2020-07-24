<?php 
require('init.php');

$rank = htmlspecialchars(getParam('rank'))?getParam('rank'):'rankhot';    // 类型
$cat = htmlspecialchars(getParam('cat'))?getParam('cat'):'all';    // 类型
$area = htmlspecialchars(getParam('area'))?getParam('area'):'all';    // 地区
$year = htmlspecialchars(getParam('year'))?getParam('year'):'all';    // 年代
$act = htmlspecialchars(getParam('act'))?getParam('act'):'all';    // 主演
$pageno = intval(getParam('pageno', '1'))?getParam('pageno', '1'):1;    // 页码

$query = '?cat='.$cat.'&year='.$year.'&area='.$area.'&act='.$act.'&rank='.$rank.'&pageno='.$pageno;
$tvApi = 'https://www.360kan.com/dianying/list.php'.$query;
// curl 获取内容
$name = '360_movie_list_'.md5($tvApi);

$file = RUNTIME.$name;
$gxpd=time()-filemtime($file);

if(!is_file($file))
{
	
	$tvData =  curl($tvApi);
	
	file_put_contents($file, gzdeflate($tvData));
	
}elseif($gxpd>2*60*60){

	$tvData =  curl($tvApi);
	
	file_put_contents($file, gzdeflate($tvData));

		
}

$content = gzinflate(file_get_contents($file)); 
//$content = GBS::curl($tvApi);
include('theme/'.$wudu_theme.'/movie.php');