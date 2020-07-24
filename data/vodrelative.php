<?php

  if($mkcmstyle =='tv')
					{
						$relaCat = 2;
						
					}elseif($mkcmstyle =='va')
					{
						$relaCat = 3;
						
					}elseif($mkcmstyle =='m')
					{
						$relaCat = 1;
						
					}elseif($mkcmstyle =='ct')
					{
						$relaCat = 4;
						
					}

$api = 'https://v.360kan.com/api/getrelatevideosv2?cb=&title='.$timu.'&id='.$vodmId.'&cat='.$relaCat.'&count=5&mid=&guid=&_=';
//print_r($api );
$relaData = curl($api);



$relaData = json_decode($relaData,true);

$relaData = $relaData['data']['list'];

?>

