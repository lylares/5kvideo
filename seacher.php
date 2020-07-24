<?php
require('init.php');
$q=$_GET['wd'];
$content=curl('https://so.360kan.com/index.php?kw='.$q);

preg_match_all('/<div class="js-(.*)(<div class="button-container g-clear">|<\/div><\/div><\/div><\/div>)/sU', $content, $matches);

preg_match_all('/<a href="http:\/\/www.360kan.com\/m\/(\w*).html" class="btn btn-gray" disabled/sU', $content, $badID);

$movies['counts'] = count($matches[0]);


for ($i=0; $i< $movies['counts']; $i++) {
    
    // 播放ID
    $tmpArr[$i]['url'] = '';
    preg_match('/<a href="http[s]?:\/\/www.360kan.com\/(.*?).html"/', $matches[1][$i], $temp);
	//print_r( $temp);
    if(isset($temp[1])) {

        $tmpArr[$i]['url'] = 'vod/'.$temp[1].'.html';
         
        
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


//print_r($tmpArr);




preg_match_all($szz,$content,$sarr);
preg_match_all($szz8,$content,$sarr8);
preg_match_all($szz1,$content,$sarr1);
preg_match_all($szz2,$content,$sarr2);
preg_match_all($szz3,$content,$sarr3);
preg_match_all($szz4,$content,$sarr4);
preg_match_all($szz5,$content,$sarr5);
preg_match_all($szz6,$content,$sarr6);
preg_match_all($szz7,$content,$sarr7);
preg_match_all($mxss,$content,$sarr10);
preg_match_all($mxzl,$content,$sarr9);
$one=$sarr[1];//标题
$two=$sarr2[1];//图片
$three=$sarr3[3];//集数
$si=$sarr4[0];//类型
$wu=$sarr5[0];//年代
$liu=$sarr6[0];//评分
$qi=$sarr7[1];//导演
$ba=$sarr8[0];//简介
$nine =$sarr1[1];
$mingxing =$sarr10[2];
$mingxing1 =$sarr10[4];
$mingxing2 =$sarr10[5];
$mingxing3 =$sarr10[6];
$mingxing4 =$sarr9[1];

include('theme/'.$wudu_theme.'/seacher.php');

