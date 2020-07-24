<?php
function getSina($url)
{
	$api = 'https://api.berryapi.net/sina';
	$fields=array(
	'AppKey'=>'RtAA3osLIU',
	'url'=> $url
);
    $cbk = weiboPost($api,$fields);
	
	$cbk =json_decode( $cbk,true);
	
	$url= 'https://ww2.sinaimg.cn/large/'.$cbk['data']['pid'].'.jpg';
	
	return $url;
}
function weiboPost($url,$data){   
    $curl = curl_init();    
    curl_setopt($curl, CURLOPT_URL, $url);               
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);     
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 1);     
    curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);   
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);    
    curl_setopt($curl, CURLOPT_AUTOREFERER, 1);    
    curl_setopt($curl, CURLOPT_POST, 1);    
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);     
    curl_setopt($curl, CURLOPT_COOKIEFILE, $GLOBALS['cookie_file']);  
    curl_setopt($curl, CURLOPT_TIMEOUT, 30);   
    curl_setopt($curl, CURLOPT_HEADER, 0);    
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);   
    $tmpInfo = curl_exec($curl);    
    if (curl_errno($curl)) {    
       echo 'Errno'.curl_error($curl);    
    }    
    curl_close($curl);    
    return $tmpInfo;    
}
require_once('../inc/inc.php');

