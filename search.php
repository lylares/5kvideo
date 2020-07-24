<?php
require('init.php');

$q=htmlentities(trim($_GET['wd']));
$tab=htmlentities(trim($_GET['tab'])) ? $_GET['tab']:'all';
$pageno=htmlentities(trim($_GET['page'])) ? $_GET['page']:1;

/* $name = '360_search_'.md5($q.$tab.$pageno);

$file = RUNTIME.$name;

$gxpd=time()-filemtime($file);

if(!is_file($file))
{
	
	$content = GBS::curl('https://so.360kan.com/index.php?kw='.$q.'&tab='.$tab.'&pageno='.$pageno);

	file_put_contents($file, gzdeflate($content));
	
}elseif($gxpd>2*60*60){

	$content = GBS::curl('https://so.360kan.com/index.php?kw='.$q.'&tab='.$tab.'&pageno='.$pageno);

	file_put_contents($file, gzdeflate($content));

		
}

    $content = gzinflate(file_get_contents($file)); */
	
	$content = GBS::curl('https://so.360kan.com/index.php?kw='.$q.'&tab='.$tab.'&pageno='.$pageno);

    preg_match_all('/<div class="js-(.*)(<div class="button-container g-clear">|<\/div><\/div><\/div><\/div>)/sU',$content,$matches);

    preg_match_all('/<a href="http:\/\/www.360kan.com\/m\/(\w*).html" class="btn btn-gray" disabled/sU',$content,$badID);

	$totalitems = count($matches[0]);

//print_r($matches[1]);
    for ($i=0; $i<$totalitems; $i++) {
    
    // 播放ID
    $tmpArr[$i]['url'] = '';
    preg_match('/<a href="http[s]?:\/\/www.360kan.com\/(.*?)\/(.*?).html"/', $matches[1][$i], $temp);
      
      //print_r($temp);exit;
	
    if(isset($temp[1])) {

        $tmpArr[$i]['url'] = 'play/'.$temp[1].'_'.$temp[2].'.html';
         
        
        for($k = 0; $k< count($badID[1]); $k++) {
            if($temp[2] == $badID[1][$k]) {
                $tmpArr[$i]['url'] = '';
                break;
            }
        }
    }
    
    // 名字
    preg_match('/class="g-playicon js-playicon" title="(.*)"/U', $matches[1][$i], $temp);
    $tmpArr[$i]['name'] = isset($temp[1])? $temp[1]: '未知';
    
    //
	preg_match_all('/<span class="playtype">(.*?)<\/span>/', $matches[1][$i], $temp);
	
	$ARR = explode("·", $temp[1][0]);
	
	//类型
	$tmpArr[$i]['type'] = isset($ARR[0])? $ARR[0]: '未知';
	//年代
	$tmpArr[$i]['year'] = isset($ARR[1])? $ARR[1]: '未知';
	
	preg_match_all("/(?s)<li class='area'>(.*?)<\/li>/", $matches[1][$i], $temp);
	
	preg_match_all("/<span>(.*?)<\/span>/", $temp[1][0], $temp);
	//地区
	$tmpArr[$i]['area'] = isset($temp[1][0])? $temp[1][0]: '未知';
	//主演
	preg_match_all('/(?s)<li class="actor">(.*?)<\/li>/', $matches[1][$i], $temp);
	
	preg_match_all('/title="(.*?)"/', $temp[1][0], $temp);

	$tmpArr[$i]['actor'] = isset($temp[1])? $temp[1]: '未知';
    
	// 评分
    preg_match('/<div class="m-score">(.*)<\/div>/U', $matches[1][$i], $temp);
    $tmpArr[$i]['score'] = isset($temp[1])? $temp[1]: '';
    
    // 封面图
    preg_match('/<img src="(.*)"/U', $matches[1][$i], $temp);
    $tmpArr[$i]['cover'] = isset($temp[1])? $temp[1]: '';
    
    // 类型
    preg_match('/monitor-desc="(.*)" data-logger="/U', $matches[1][$i], $temp);
    $tmpArr[$i]['types'] = isset($temp[1])? $temp[1]: '';
    
    // 描述
    preg_match('/<i>简&nbsp;&nbsp;介&nbsp;：<\/i>(.*)(<a href="http:\/\/www.360kan.com|<\/div>)/sU', $matches[1][$i], $temp);
    $tmpArr[$i]['description'] = strip_tags( isset($temp[1])? $temp[1]: '暂无介绍');

}

    preg_match_all("/<div class='a-engine-body'/",$content,$startemp);
	//require 'data/bangdan.php';

if($startemp[0][0]=="<div class='a-engine-body'"){
preg_match_all("/<b>别名：<\/b><span class='w-star-alias'>(.*?)<\/span>/",$content, $matches2);
preg_match_all("/<b>(.*?)<\/b><span>(.*?)<\/span>/", $content, $matches3);
preg_match_all("/<dt>介绍：<\/dt><dd>(.*?)<\/dd>/", $content, $matches4);
preg_match_all("/(?s)<a class='w-star-imglink' href='(.*?)'>(.*?)<\/a>/", $content, $matches5);
preg_match("/<img src='(.*?)'/", $matches5[2][0], $avatar);
//print_r($avatar);
//个人信息360接口
$starArr['star']= $matches1[3][0];
$starArr['star_advatar']= $avatar[1];	
$starArr['star_baike']= $matches1[1][0];
$starArr['star_other_name']= $matches2[1][0];
$starArr['star_area']= $matches3[2][0];
$starArr['star_birthday']= $matches3[2][1];
$starArr['star_xz']= $matches3[2][2];
$starArr['star_xx']= $matches3[2][3];
$starArr['star_hight']= $matches3[2][4];
$starArr['star_weight']= $matches3[2][5];
$starArr['star_info']= $matches4[1][0];			
//个人信息
preg_match("/(?s)<ul class=\"b-tab b-tab-kan g-clear\" id='js-b-tab'>(.*?)<\/ul>/",$content,$tabtemp);

preg_match_all('/<a  target="_self" href="(.*?)">(.*?)<\/a>/',$tabtemp[1],$tab);

preg_match("/查看全部(.*?)部电影/",$content,$totalm);
preg_match("/查看全部(.*?)部综艺/",$content,$totalva);
preg_match("/查看全部(.*?)部电视剧/",$content,$totaltv);

require('theme/'.$wudu_theme.'/starsearch.php');
}else{
require('theme/'.$wudu_theme.'/search.php');

}
