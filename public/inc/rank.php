<?php
$bangdan=GBS::curl('http://www.360kan.com/');
//print_r($bangdan);
$bd='#<ul class="rank-list g-clear">[\s\S]*?</ul>#';
preg_match_all($bd, $bangdan,$bdarr);

$allbd = $bdarr[0][0];
$dybd = $bdarr[0][3];
$tvbd = $bdarr[0][1];
$zybd = $bdarr[0][2];
$dmbd = $bdarr[0][4];

$bdinfo='#<a title="(.*?)" href="(.*?)" class="name">(.*?)</a>[\s\S]+?<span class="vv">(.*?)</span>#';

preg_match_all($bdinfo, $allbd,$allbdR);
preg_match_all($bdinfo, $dybd,$dybdR);
preg_match_all($bdinfo, $tvbd,$tvbdR);
preg_match_all($bdinfo, $zybd,$zybdR);
preg_match_all($bdinfo, $dmbd,$dmbdR);

//整体榜单
$bdArr['all']['title'] =$allbdR[1];
$bdArr['all']['url'] =$allbdR[2];
$bdArr['all']['num'] =$allbdR[4];

//电影榜单
$bdArr['m']['title'] =$dybdR[1];
$bdArr['m']['url'] =$dybdR[2];
$bdArr['m']['num'] =$dybdR[4];

//电视剧榜单
$bdArr['tv']['title'] =$tvbdR[1];
$bdArr['tv']['url'] =$tvbdR[2];
$bdArr['tv']['num'] =$tvbdR[4];

//综艺榜单
$bdArr['va']['title'] =$zybdR[1];
$bdArr['va']['url'] =$zybdR[2];
$bdArr['va']['num'] =$zybdR[4];

//动漫榜单
$bdArr['ct']['title'] =$dmbdR[1];
$bdArr['ct']['url'] =$dmbdR[2];
$bdArr['ct']['num'] =$dmbdR[4];