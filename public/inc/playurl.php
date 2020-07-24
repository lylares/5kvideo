<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');


function unicode_decode($name){
   $json = '{"str":"'.$name.'"}';
  $arr = json_decode($json,true);
  if(empty($arr)) return '';
  return $arr['str'];
}

$pid = getParam('id');
$vtypes = getParam('type');
$player = 'https://www.360kan.com/'.$vtypes.'/'.$pid.'.html';

//$tvData = curl_file_get_contents($player);
$tvData = GBS::curl($player);

$catitemType = '#类型：</span>(.*?)</p>#';//动漫类型

//$str=$_GET['play'];
//$arr = explode('/', $str);
$mkcmsid=$pid;
$mkcmstyle=$vtypes;

//mId

preg_match("#mId: '(.*?)',#",$tvData,$midTemp);

preg_match("#mId : '(.*?)',#",$tvData,$midTemp2);

$vodmId= $midTemp[1];

if($mkcmstyle=='sv'){
		
}else{

if(!isset($mkcmstyle)&&!$mkcmstyle){
	
	$mkcmstyle= 'bplay';
}

//
//导演
preg_match_all('/(?s)<p class="item item-director">(.*?)<\/p>/',$tvData,$director);
preg_match_all('/<a class="name" href="(.*?)">(.*?)<\/a>/',$director[1][0],$director);
$director=$director[2];
if(!$director){
preg_match_all('/(?s)<p class="item">(.*?)<\/p>/',$tvData,$director);
preg_match_all('/<a class="name" href="(.*?)">(.*?)<\/a>/',$director[1][3],$director);
$director = $director[2];
}

//演员
preg_match_all('/(?s)<p class="item item-actor">(.*?)<\/p>/',$tvData,$actor);
preg_match_all('#<a class="name" href=(.*?)>(.*?)</a>#',$actor[1][0],$actorTemp);//演员
$vodActor = $actorTemp[2];

//封面
preg_match_all("/(?s)<div class=\"s-cover\" data-block=\"tj-cover\" monitor-desc=\"大海报\" monitor-shortpv id='js-s-cover'>(.*?)<\/div>/", $tvData, $coverTemp);
preg_match_all('/<img src="(.*?)">/', $coverTemp[1][0], $vodcover);
$vodCover = $vodcover[1][0];

//简介
$shdescription = '#<p class="item-desc">(.*?)</p>#s';//其他简介
preg_match_all($shdescription, $tvData, $sdsp);

$jianjie = '#<p class="item-desc js-close-wrap" style="display:none;">(.*?)</p>#';//动漫完整简介
preg_match_all($jianjie, $tvData, $catdes);
$cartoonShdesc = '#<p class="item-desc js-open-wrap">(.*?)</p>#';//动漫简介

preg_match_all($cartoonShdesc, $tvData, $catshdes);

$brinfo = strip_tags($sdsp[1][1]);//完整简介

$shdesc = strip_tags($sdsp[1][0]);//简介

if($brinfo == null){
	
	$brinfo = strip_tags($catdes[1][0]);
	
}
//地区
preg_match('/<p class="item"><span>地区 ：<\/span>(.*?)<\/p>/',$tvData,$area);
$vodarea = $area[1];
//年代
preg_match('/<p class="item"><span>年代 ：<\/span>(.*?)<\/p>/',$tvData,$year);
$vodyear = $year[1];
//类型
preg_match_all('/(?s)<p class="item"><span>类型 ：<\/span>(.*?)<\/p>/',$tvData,$vodtype);
preg_match_all('#<a class="(.*?)" href=(.*?)>(.*?)</a>#',$vodtype[1][0],$vodtype);
$vodtype = $vodtype[3];	
if(!$vodtype){
preg_match_all('/(?s)<p class="item"><span class="cat-title">类型 ：<\/span>(.*?)<\/p>/',$tvData,$vodtype);
preg_match_all('#<a class="(.*?)" href=(.*?)>(.*?)</a>#',$vodtype[1][0],$vodtype);
$vodtype = $vodtype[3];	
}
/////////////////////
if($mkcmstyle=='va'){
	$vodmId= $midTemp2[1];
	//类型：
	preg_match_all('/(?s) <p class="item item42"><span class="cat-title">类型 ：<\/span>(.*?)<\/p>/',$tvData,$vodtype);
    preg_match_all('/<a class="(.*?)" href="(.*?)" target="_blank">(.*?)<\/a>/',$vodtype[1][0],$vodtype);
    $vodtype=$vodtype[3];
	//地区
    preg_match('/<p class="item item41"><span>地区 ：<\/span>(.*?)<\/p>/',$tvData,$area);
    $vodarea = $area[1];
    //年代
    preg_match('/<p class="item item41"><span>年代 ：<\/span>(.*?)<\/p>/',$tvData,$year);
    $vodyear = $year[1];
	//播出
    preg_match('/<p class="item item41"><span>播出 ：<\/span>(.*?)<\/p>/',$tvData,$playorigin);
    $playorigin = $playorigin[1];
	//明星
    preg_match('/(?s)<p class="item item44 item-actor">(.*?)<\/p>/',$tvData,$actor);
	preg_match_all('/>(.*?)<\/a/',$actor[1],$actor);
    $vodActor =$actor[1];
	
}
//////////////////

if(!$vodarea){
preg_match_all('/(?s)<p class="item"><span>地区 ：<\/span>(.*?)<\/p>/',$tvData,$vodarea);
preg_match_all('/>(.*?)<\/a>/',$vodarea[1][0],$vodarea);	
$vodarea = $vodarea[1];	
}

//标题
$biaoti = '#<h1>(.*?)</h1>#';
preg_match_all($biaoti, $tvData, $btarr);
$playtitle = $btarr[1][0];
//更新
preg_match_all('/(?s)<p class="tag">更新至<span>(.*?)<\/span>(.*?)<\/p>/',$tvData,$vodasp);
//print_r($vodasp);
$vodasp=$vodasp[1][0];
$vodtotalasp=$vodasp[2][0];

if(!$vodasp){
preg_match_all('/(?s)<p class="tag">更新至(.*?)<\/p>/',$tvData,$vodasp);
$vodasp=$vodasp[1][0];	
}

//评分
$itermScore = '#<span class="s">(.*?)</span>#';
preg_match_all($itermScore, $tvData, $tvScore);
$tvScore =$tvScore[1][0];

if(!$tvScore){
	
	$tvScore = '无评分';
	
	}else{
		
		$tvScore = $tvScore.'分';
		
		}
		
//来源
$laiyuan = '#{"ensite":"(.*?)","cnsite":"(.*?)","vip":(.*?)}#';
preg_match_all($laiyuan, $tvData, $laiyuanarr);	
$yuan=$laiyuanarr[1];//来源英文
$yuanname=$laiyuanarr[2];//来源中文	


if($mkcmstyle=='tv'||$mkcmstyle=='ct')
{
preg_match_all('/playsite:\[(.*?)\],/iU',$tvData,$tmpe);

$epd = '['.$tmpe[1][0].']';

$epd =json_decode($epd,1);

foreach ($epd as $key=>$value)
{
	
	
	switch($value['ensite'])
	{
		case 'cntv':
		$new[$key]['id']=1;
		break;
		
		case 'leshi':
		$new[$key]['id']=2;
		break;
		
		case 'sohu':
		$new[$key]['id']=3;
		break;
		
		case 'pptv':
		$new[$key]['id']=4;
		break;
		
		case 'wasu':
		$new[$key]['id']=5;
		break;
		
		default:
		$new[$key]['id']=$key+5;
		
	}
	
	
	$new[$key]['site']=$value['ensite'];
	$new[$key]['name']=$value['cnsite'];
	$new[$key]['vip']=$value['vip'];
}

$espOrigin = aspTransfer($new,'id',SORT_ASC,'site',SORT_ASC,'name',SORT_DESC);
$defaultSite = $new[0]['site'];//默认播放源
$defaultSitename = $new[0]['name'];//默认播放源名称
}




//播放链接		
$playlist = '#<a data-daochu="to=(.*?)" class="btn js-site ea-site (.*?)" href="(.*?)">(.*?)</a>#';
preg_match_all($playlist, $tvData, $playlistTemp);
//电影链接
$dysrc=$playlistTemp[0];
$d= $playlistTemp[4];

preg_match_all('/data-daochu="to=\w*" class="btn js-site ea-site ea-site-\w*" href="(.*)">(.*)<\/a>/sU', $tvData, $temp);//解码电影
preg_match_all('/<a data-daochu="to=(.*?)" class="js-site zd-down-item ea-site ea-site-(.*?)" href="(.*?)">(.*?)<\/a>/', $tvData, $temp2);//解码电影
//电视剧动漫多来源判断

$c= $temp[1];

if(count($temp2[3])>=1){
	$c= array_merge($temp[1],$temp2[3]); //电影的播放链接
}
if(count($temp2[4])>=1){

$d= array_merge($playlistTemp[4],$temp2[4]);//电影来源
}
//相关影人

preg_match_all('#<ul class="s-star-list g-clear">(.*?)</ul>#s',$tvData,$actTemp);
preg_match_all('#data-src="(.*?)" src="(.*?)" alt="(.*?)">\r\n\s+</div>\r\n\s+<p class="label">(.*?)</p>#',$actTemp[1][0],$actTemp2);
//
$rlactor = $actTemp2[3];//影人姓名
$rlactoratavar = $actTemp2[1];//影人头像

$ztlizz="#<a href='(.*?)' data-daochu=to=(.*?) class='js-link'>#";
preg_match_all($ztlizz, $tvData,$zyliarr);
preg_match_all("#<span class='w-newfigure-hint'>(.*?)</span>#", $tvData,$varTitle);

$noqi=$qiarr[1];
$zypic=$imgarr[1];
$zyname=$imgarr[2];

$varityData=$zyliarr[1];//综艺剧集
$varityTitle = $varTitle[1];//综艺选集标题

//开启收费模式

}

/**
 * curl 获取网页源码函数
 * @param $url 目标页面 URL
 * @return 页面源码
 */
function curlGet($url){ 
    $ch = curl_init(); 
    $timeout = 30; 
    $ua = 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36';
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    curl_setopt($ch, CURLOPT_ENCODING, "");
    //curl_setopt($ch, CURLOPT_USERAGENT, $ua);   // 伪造ua 
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip'); // 取消gzip压缩
   // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); // https请求 不验证证书和hosts
   // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    $content = trim(curl_exec($ch)); 
    curl_close($ch); 
    return $content; 
}
