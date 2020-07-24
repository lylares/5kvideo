<?php
include_once 'simple_html_dom.php';

$act = $_GET['act'];
switch($act){
  case 'tv':{
    getTvList();
    break;
  }
  case 'show':{
    getShowList();
    break;
  }
  case 'ct':{
    getCtList();
    break;
  }
}

function getTvList(){
  $site = $_GET['site'];
  $id= $_GET['id'];
  $category="2";
  $url = "http://www.360kan.com/cover/switchsite?site=".$site."&id=".$id."&category=".$category;
  $html = file_get_html($url);
  $data=json_decode($html)->data;
  $html = str_get_html($data);
  $itemArray = $html->find('div[class=num-tab-main g-clear js-tab] a');
  /*array_pop($jishu);*/
  $jishuArr = array();
  foreach($itemArray as $v){
    if($v->plaintext!="收起"){
      $jishuArr[] = array(
          "num"=> str_replace(' ', '', $v->plaintext),
          "url"=>str_replace('?ptag=360kan.movie.pay', '', $v->href)
      );
    }
  }
  echo json_encode($jishuArr);

}
function getShowList(){
  /* http://www.360kan.com/cover/zongyilist?id=ZsEob6Jv7JQ3Dz&site=imgo&do=switchyear&year=2016*/
  $site = $_GET['site'];
  $id= $_GET['id'];
  $year=$_GET['year'];
  $url = "http://www.360kan.com/cover/zongyilist?site=".$site."&id=".$id."&do=switchyear&year=".$year;
//$url="http://www.360kan.com/cover/zongyilist?id=ZsEob6Jv7JQ3Dz&site=imgo&do=switchyear&year=2016";
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_REFERER,$url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  $result = str_replace("data-src", "datasrc", $result);
  curl_close($curl);
  $data=json_decode($result)->data;
  $html = str_get_html($data);
  $source = $html->find('ul[class=list w-newfigure-list g-clear js-year-page] li');
  $arr = array();
  foreach ($source as $k => $e) {
    $arr[$k] = array(
        "title" => $e->title,
        "url" => $e->first_child()->href,
        "imgUrl" => $e->first_child()->first_child()->first_child()->datasrc,
        "date" => $e->first_child()->first_child()->children(1)->plaintext,
    );
  }
  echo json_encode($arr);

}

function getCtList(){
  $site = $_GET['site'];
  $id= $_GET['id'];
  $category="4";
  $url = "http://www.360kan.com/cover/switchsite?site=".$site."&id=".$id."&category=".$category;
  $html = file_get_html($url);
  $data=json_decode($html)->data;
  $html = str_get_html($data);
  $itemArray = $html->find('div[class=num-tab-main g-clear js-tab] a');
  /*array_pop($jishu);*/
  $jishuArr = array();
  foreach($itemArray as $v){
    if($v->plaintext!="收起"){
      $jishuArr[] = array(
          "num"=> str_replace(' ', '', $v->plaintext),
          "url"=>str_replace('?ptag=360kan.movie.pay', '', $v->href)
      );
    }
  }
  echo json_encode($jishuArr);

}

?>



