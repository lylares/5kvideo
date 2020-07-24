<?php
header('Content-type:text/json');
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
require_once('init.php');
$a = htmlentities(trim($_GET['a']));
$b = htmlentities(trim($_GET['b']));
if (!isset($a)||!isset($b))
{
	exit(callback(2,'you have no permission !'));
}
require(API.'admin/login.php');
require(API.'admin/admin.php');
require(API.'admin/system.php');
require(API.'admin/user.php');
require(API.'admin/slider.php');
require(API.'admin/topic.php');
require(API.'admin/upload.php');
require(API.'admin/vod.php');
require(API.'admin/tvlive.php');