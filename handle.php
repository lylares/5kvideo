<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');	

require('init.php');

function getrand($i){
	if($i)
	{
	$r = new randomString(14,randomString::MIXED, TRUE);	
	return $r;
	}
	
}

$data=$db->getALL('select * from wudu_tvlive');

foreach($data as $key =>$row)
{
	$id = $row['id'];
	$pid = getrand(14);
	$_data  = [
	'pid'=>$pid
	];

	$res=$db->update("wudu_tvlive",$_data,"id=$id");
	
		
		print_r($res);

	

	
}

//print_r($data);