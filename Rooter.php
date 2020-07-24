<?php
require('init.php');
$a = htmlentities(trim($_GET['a']));
$b = htmlentities(trim($_GET['b']));
if (!isset($a)||!isset($b))
{
	exit(callback(2,'you have no permission !'));
}


require ROOTER.$a.'_'.$b.'.php';

