<?php
error_reporting(0); 
header('Content-type:text/html;charset=utf-8'); 
if ($mkcms_dianyingnew==0){
$urllist='http://www.360kan.com/dianying/list.php?rank=createtime&cat=all&area=all&act=all&year=all'; 
}
elseif($wudu_dianyingnew==1){
$urllist='http://www.360kan.com/dianying/list.php?rank=rankhot&cat=all&area=all&act=all&year=all&pageno=1'; 
}
mkdir('./data/runtime');
$gxpd=time()-filemtime('./data/runtime/'.md5($urllist));
if($gxpd>2*60*60){
$info=file_get_contents($urllist);
file_put_contents('./data/runtime/'.md5($urllist),gzdeflate($info));
}	
$info=gzinflate(file_get_contents('./data/runtime/'.md5($urllist)));

$vname='#<span class="s1">(.*?)</span>#';
$fname='#<span class="s2">(.*?)</span>#';
$nname='#<span class="hint">(.*?)</span>#';
$vlist='#<a class="js-tongjic" href="(.*?)">#';
$vstar='# <p class="star">(.*?)</p>#';
$vvlist='#<div class="s-tab-main">[\s\S]+?<div monitor-desc#';
$vimg='#<img src="(.*?)">#'; 
$bflist='#<a data-daochu(.*?) href="(.*?)" class="js-site-btn btn btn-play"></a>#'; $array = array(); 
preg_match_all($vname, $info,$namearr); 
preg_match_all($vlist, $info,$listarr); 
preg_match_all($vstar, $info,$stararr); 
preg_match_all($vvlist, $info,$imglist);
$zcf=implode($glue, $imglist[0]);
preg_match_all($vimg, $zcf,$imgarr); 
preg_match_all($fname, $info,$fnamearr); 
preg_match_all($nname, $info,$nnamearr); 
?>
