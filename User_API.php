<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
header('Content-type:text/json');

require('init.php');
$a = htmlentities(trim($_GET['a']));
$b = htmlentities(trim($_GET['b']));
if (!isset($a)||!isset($b)||!$a||!$b)
{
	exit(callback(2,'you have no permission !'));
}


require API.'user/'.$a.'_'.$b.'.php';
