<?php

$play = trim($_GET['play']);
$site = trim($_GET['site']);


if(isset($_SESSION['uid'])&&$_SESSION['uid']){

$uid = $_SESSION['uid'];
  
if(isset($play)&&$play)
{

  $sql = "select * from wudu_play where url ='$play' and site = '$site'";
  $res = $db->getRow($sql);
  
    $_data['name'] = '';
    $_data['url'] = '';
    $_data['cover'] = '';
    $_data['types'] = '';
    $_data['site'] = '';
    $_data['times'] = date("Y-m-d H:i:s");
  
  if($res){

   $res = $db->update("wudu_play",$_data,"userid='$uid'");
    
  }else{
  
  $res = $db->insert("wudu_play",$_data);
  
  
  }

}
  
}
