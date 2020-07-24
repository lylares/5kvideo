<?php
require('init.php');
$pid = html_entity_decode(trim($_GET['play']));
$row=$fdb->getRow("select * from wf_vod where vod_id = '$pid'");

if($row){

	$id = $row['vod_id'];
	$type_id = $row['type_id'];
  	$type_id_1 = $row['type_id_1'];
	$name = $row['vod_name'];
	$score = $row['vod_score'];
	//$integral = $row['integral'];
	//$user = $row['user'];
	//$parent = $row['parent'];
	$picture = $row['vod_pic'];
	$content = $row['vod_blurb'];
	$scontent = $row['vod_play_url'];
	//$seoname = $row['seoname'];
	$actor = $row['vod_actor'];
	$director = $row['vod_director'];
	//$keywords = $row['keywords'];
	//$description = $row['description'];
	$date = $row['vod_year'];
	$area = $row['vod_area'];
	$language = $row['language'];
	$mtype = $row['vod_class'];
	$title = ($seoname == '') ? $name .' - '.$wudu_name : $seoname.' - '.$name.' - '.$wudu_name ;
	
} else {
	
	die ('您访问的详情不存在');
}
$access = [20,22,23,24,28];
require('theme/'.$wudu_theme.'/wplay.php');

