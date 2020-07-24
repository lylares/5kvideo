<?php
if (!defined('PCFINAL')) {
	exit('Request Error!');
}
/**
**item内容主体
*/
function indexTvitem($content)
{
preg_match_all("/<img src='(.*?)' data-src='(.*?)' alt='(.*?)'  \/>/",$content,$temp);
preg_match_all("/<span class='w-newfigure-hint'>(.*?)<\/span>/",$content,$temp0);//选集
preg_match_all("/<p class='w-newfigure-desc'>(.*?)<\/p>/",$content,$temp1);
preg_match_all("/\/tv\/(.*?).html'  class='js-link'>/",$content,$temp2);
preg_match_all("/<span class='s2'>(.*?)<\/span>/",$content,$temp3);
/**
**最新电视剧
*/
//处理首页蛋疼的sv插入
$title = $temp[3];
//array_splice($title, 2, 1);

$cover = $temp[2];
//array_splice($cover, 2, 1);

$status = $temp1[1];
//array_splice($status, 2, 1);
//处理首页蛋疼的sv插入
//$num = count($webtvtemp[2]);	
for($i=0;$i<18;$i++){
	$tvPoditem[$i]['name'] = $title[$i];
	$tvPoditem[$i]['id'] = 'tv_'.$temp2[1][$i];
	$tvPoditem[$i]['cover'] = $cover[$i];
	$tvPoditem[$i]['asp'] = $temp0[1][$i];
	$tvPoditem[$i]['score'] = trim(strip_tags($temp3[1][$i]));	
	$tvPoditem[$i]['status'] = $status[$i];
}
	return $tvPoditem;
	
	//
}

function indexMvitem($content)
{
preg_match('/<div class="content rmcontent">(.*)<\/ul>/sU',$content,$mtemp);
preg_match_all("/data-src='(.*?)' alt='(.*?)'  \/>/",$mtemp[1],$temp);//name cover
preg_match_all("/<p class='w-newfigure-desc'>(.*?)<\/p>/",$mtemp[1],$temp1);//des
preg_match_all("/\/m\/(.*?).html'  class='js-link'>/",$mtemp[1],$temp2);//id
preg_match_all("/<span class='s2'>(.*?)<\/span>/",$mtemp[1],$temp3);//score

for($i=0;$i<10;$i++){
	$tvPoditem[$i]['name'] = $temp[2][$i];
	$tvPoditem[$i]['id'] = 'm_'.$temp2[1][$i];
	$tvPoditem[$i]['cover'] = $temp[1][$i];
	$tvPoditem[$i]['score'] = trim(strip_tags($temp3[1][$i]));	
	$tvPoditem[$i]['des'] = $temp1[1][$i];
}

	
	return $tvPoditem;

}

function echotvslider()
{
$api = 'https://www.360kan.com/dianshi/index.html';	
//tvslider

$sdata = GBS::curl($api);

preg_match_all("/(?s)<div class='b-topslider-item js-g-slide-item g-slide-item' style='display:block'>(.*?)<\/div>/",$sdata,$stemp);

$tvdata = $stemp[1][0];
  
preg_match_all("/(?s)<div class='b-topslider-item js-g-slide-item g-slide-item' >(.*?)<\/div>/",$sdata,$stemp1);

$tvdata1 = $stemp1[1][0];

  $html = $tvdata.$tvdata1;
preg_match_all("/<a href='https:\/\/www.360kan.com\/tv\/(.*?).html' class='(.*?)' ><img src='(.*?)' alt='(.*?)' \/><span class='title'>(.*?)<\/span><span class='desc'>(.*?)<\/span>/",$html,$temp);
  

//print_r($temp);

$count = count($temp[1]);
for($i=0;$i<$count;$i++){
	$tvslideritem[$i]['name'] = $temp[4][$i];
	$tvslideritem[$i]['id'] = $temp[1][$i];
	$tvslideritem[$i]['cover'] = $temp[3][$i];
	$tvslideritem[$i]['desc'] = $temp[6][$i];
}
return $tvslideritem;	
}




function echoslider($content)
{	
//vaslider
preg_match_all('/(?s)<div id="js-topslider"  data-effect="fade" class="i-topslider">(.*?)<\/div>/',$content,$stemp);
preg_match_all('/<p class="name">(.*)<\/p>/',$content,$stemp2);
preg_match_all('/<a class="js-link js-g-slide-item" href="https:\/\/www.360kan.com\/(.*?).html" style="(.*?)" data-img="(.*?)">/',$stemp[1][0],$stemp1);

$vascount = count($stemp2[1]);
for($i=0;$i<$vascount;$i++){
	$vaslideritem[$i]['name'] = $stemp2[1][$i];
	$vaslideritem[$i]['id'] = $stemp1[1][$i];
	$vaslideritem[$i]['cover'] = $stemp1[3][$i];
}
return $vaslideritem;	
}

//综艺slider
function echovaslider($content)
{	

    $patten_slider='/(?s)<ul class="b-topslidernew-list js-slide-list">(.*?)<\/ul>/';
	preg_match_all($patten_slider,$content,$slider_temp);
	preg_match_all('/<a class="" href="https:\/\/www.360kan.com\/va\/(.*?).html"/',$slider_temp[1][0],$temp0);
    preg_match_all('/style="background-image:url\((.*?)\);"/',$slider_temp[1][0],$temp);
    preg_match_all('/(?s)<ul class="b-topslidernew-btns js-slide-btns">(.*?)<\/ul>/',$content,$slider_temp2);
    preg_match_all('/<span class="b-topslidernew-tit">(.*?)<\/span>/',$slider_temp2[0][0],$temp1);
	preg_match_all('/<span class="b-topslidernew-desc">：(.*?)<\/span>/',$slider_temp2[0][0],$tempdesc);
    $count = count($temp0[1]);
    $vaslideritem = [];
    for($i=0;$i<$count;$i++){
        $vaslideritem[$i]['id'] = 'va_'.$temp0[1][$i];
	    $vaslideritem[$i]['name'] =$temp1[1][$i];
	    $vaslideritem[$i]['cover'] = $temp[1][$i];
	    $vaslideritem[$i]['dsc'] = $tempdesc[1][$i];
    }
    return $vaslideritem;	
}

function echoitem($content)
{

preg_match_all('/(?s)<ul class="list w-newfigure-list g-clear">(.*?)<\/ul>/',$content,$temp);

preg_match_all("/<a href='https:\/\/www.360kan.com\/(.*?).html'  class='js-link'><div class='w-newfigure-imglink g-playicon js-playicon'> <img src='(.*?)' data-src='(.*?)' alt='(.*?)'  \/><span class='w-newfigure-hint'>(.*?)<\/span><\/div><div class='w-newfigure-detail'><p class='title g-clear'><span class='s1'>(.*?)<\/span><\/p><p class='w-newfigure-desc'>(.*?)<\/p>/",$temp[0][0],$webtvtemp);
$num = count($webtvtemp[1]);	
for($i=0;$i<$num;$i++){
	$vaitem[$i]['name'] = $webtvtemp[4][$i];
	$vaitem[$i]['id'] = str_replace('/','_',$webtvtemp[1][$i]);
	$vaitem[$i]['cover'] = $webtvtemp[3][$i];
	$vaitem[$i]['asp'] = $webtvtemp[5][$i];
	$vaitem[$i]['status'] = $webtvtemp[7][$i];
}

	return $vaitem;

}

//首页动漫

function echoindexCtitem($content)
{

//$content = curl($content);

preg_match_all("/title='(.*?)' class='w-newfigure w-newfigure-234x175'><a href='(.*?)\/ct\/(.*?).html'/",$content,$temp);
preg_match_all("/<div class='w-newfigure-imglink g-playicon js-playicon'> <img src='(.*?)' data-src='(.*?)'/",$content,$temp1);
preg_match_all("/<p class='w-newfigure-desc'>(.*?)<\/p>/",$content,$temp2);
preg_match_all("/<span class='w-newfigure-hint'>(.*?)<\/span>/",$content,$temp3);

//print_r($temp);


for($i=0;$i<12;$i++){
	$vaitem[$i]['name'] = $temp[1][$i];
	$vaitem[$i]['id'] = 'ct_'.$temp[3][$i];
	$vaitem[$i]['cover'] = $temp1[2][$i];
	$vaitem[$i]['desc'] = $temp2[1][$i];
	$vaitem[$i]['status'] = $temp3[1][$i];
}

	return $vaitem;

}
//首页综艺
function echovaitem($content)
{

preg_match_all('/(?s)<ul class="rebo-list w-newfigure-list g-clear js-list">(.*?)<\/ul>/',$content,$temp);

//print_r($temp);

preg_match_all("/va\/(.*?).html/",$temp[1][0],$temp_id);

preg_match_all("/data-src='(.*?)'/",$temp[1][0],$temp_cover);
preg_match_all("/title='(.*?)'/",$temp[1][0],$temp_name);
preg_match_all("/<span class='w-newfigure-hint'>(.*?)<\/span>/",$temp[1][0],$temp_asp);
preg_match_all("/<p class='w-newfigure-desc'>(.*?)<\/p>/",$temp[1][0],$temp_asc);
//print_r($temp_asp);

preg_match_all("/<a href='\/(.*?).html'  class='js-link'><div class='w-newfigure-imglink g-playicon js-playicon'> <img src='(.*?)' data-src='(.*?)' alt='(.*?)'  \/><span class='w-newfigure-hint'>(.*?)<\/span><\/div><div class='w-newfigure-detail'><p class='title g-clear'><span class='s1'>(.*?)<\/span><\/p><p class='w-newfigure-desc'>(.*?)<\/p>/",$temp[1][0],$webtvtemp);
//print_r($webtvtemp);
$num = count($temp_id[1]);	
for($i=0;$i<$num;$i++){
	$vaitem[$i]['name'] = $temp_name[1][$i];
	$vaitem[$i]['id'] = $temp_id[1][$i];
	$vaitem[$i]['cover'] = $temp_cover[1][$i];
	$vaitem[$i]['asp'] = $temp_asp[1][$i];
	$vaitem[$i]['status'] = $temp_asc[1][$i];
}

	//print_r($webtvtemp);
	return $vaitem;

}

function echovarank($content)
{

preg_match_all('/(?s)<div class="top-rank-tab js-itabs">(.*?)<\/div>/',$content,$temp);

preg_match_all('/<a href="https:\/\/www.360kan.com\/va\/(.*?).html">\r\n\s+<span class="(.*?)">(.*?)<\/span>\r\n\s+<span class="name">(.*?)<\/span>\r\n\s+<span class="date">(.*?)<\/span>\r\n\s+<\/a>/',$temp[1][0],$webtvtemp);

//print_r($webtvtemp);
/**
**综艺首页rank
*/
$num = count($webtvtemp[1]);	
for($i=0;$i<$num;$i++){
	$varankitem[$i]['name'] = $webtvtemp[4][$i];
	$varankitem[$i]['id'] = $webtvtemp[1][$i];
	//$vaitem[$i]['cover'] = $webtvtemp[3][$i];
	$varankitem[$i]['asp'] = $webtvtemp[5][$i];
	//$vaitem[$i]['status'] = $webtvtemp[7][$i];
}

	return $varankitem;

}

function echovahotitem($content,$type)
{
	
	preg_match_all('/(?s)<dl class="g-clear">(.*?)<\/dl>/',$content,$temp);
	
	switch ($type)
	{
	case 1:
	preg_match_all('/<a href="https:\/\/www.360kan.com\/(.*?)">(.*?)<\/a>/',$temp[1][0],$temp);

	break;
	
	case 2;
	preg_match_all('/<a href="https:\/\/www.360kan.com\/(.*?)">(.*?)<\/a>/',$temp[1][1],$temp);
	break;
	
	case 3;
	preg_match_all('/<a href="https:\/\/www.360kan.com\/(.*?)">(.*?)<\/a>/',$temp[1][2],$temp);
	break;
	
	case 4;
	preg_match_all('/<a href="https:\/\/www.360kan.com\/(.*?)">(.*?)<\/a>/',$temp[1][3],$temp);
	break;
	}
	$num = count($temp[1]);	
    for($i=0;$i<$num;$i++){
	$vahoitem[$i]['name'] = $temp[2][$i];
	$vahoitem[$i]['id'] = str_replace('/','_',$temp[1][$i]);
    }
	return $vahoitem;
}

//榜单

function getRank($param)
{

	$name = md5('https://www.360kan.com/');
    $api='https://www.360kan.com/';
    
	$content= GBS::curl($api);
	preg_match_all('/<ul class="rank-list g-clear">(.*)<\/ul>/sU',$content,$mtemp);
	
	if($param=='tv')
	{
		//电视榜单
	    $data = $mtemp[1][0];
	}elseif($param=='va')
	{   //综艺榜单
		$data = $mtemp[1][1];
	}elseif($param=='m')
	{   //电影榜单
		$data = $mtemp[1][2];
	}elseif($param=='ct')
	{   //动漫榜单
		$data = $mtemp[1][3];
	}
	
	preg_match_all('/title="(.*?)"/',$data,$temp);
	preg_match_all('/<span class="vv">(.*?)<\/span>/',$data,$temp1);
	preg_match_all('/\/'.$param.'\/(.*?).html"/',$data,$temp2);
	//$num = count($temp[1]);	
    for($i=0;$i<10;$i++){
	$rank[$i]['name'] = $temp[1][$i];
	$rank[$i]['num'] = $temp1[1][$i];
	$rank[$i]['id'] = $temp2[1][$i];
    }
	return $rank;
	

}