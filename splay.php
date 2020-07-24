<?php
require('init.php');
$pid = html_entity_decode(trim($_GET['id']));
$row=$db->getRow("select * from wudu_vod where pid = '$pid'");

if($row){

	$id = $row['id'];
	$pid = $row['pid'];
	$name = $row['name'];
	$score = $row['score'];
	$type = $row['type'];
	$integral = $row['integral'];
	$user = $row['user'];
	$parent = $row['parent'];
	$picture = $row['picture'];
	$content = $row['content'];
	$scontent = $row['scontent'];
	$seoname = $row['seoname'];
	$actor = $row['actor'];
	$director = $row['director'];
	$keywords = $row['keywords'];
	$description = $row['description'];
	$date = $row['date'];
	$area = $row['area'];
	$language = $row['language'];
	$mtype = $row['mtype'];
	$title = ($seoname == '') ? $name .' - '.$wudu_name : $seoname.' - '.$name.' - '.$wudu_name ;
	
} else {
	
	die ('您访问的详情不存在');
}

include('theme/'.$wudu_theme.'/splay.php');

