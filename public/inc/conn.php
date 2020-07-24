<?php
error_reporting(E_ALL^E_DEPRECATED);

ob_start();
if (!session_id()) session_start();

define('PCFINAL', TRUE);

date_default_timezone_set('PRC');//设置时区
header('Content-type:text/html; charset=utf-8');//设置编码



$db  = DB::getIntance();
//$fdb  = FDB::getIntance();

