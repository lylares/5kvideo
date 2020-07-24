<?php
//header("Access-Control-Allow-Origin: *");
// 公共入口模块，用于引入各个模块
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
//DEBUG
error_reporting(0);
$debug = trim($_GET['__debug__']);
//
session_start();
define('wudu', 'on');
define('SYSTEM_ROOT', dirname(__FILE__));    // 系统目录
define('PUBLIC', SYSTEM_ROOT.'/public/');    // 插件库
define('ROOTER', SYSTEM_ROOT.'/public/Rooter/');    // 路由
define('API', SYSTEM_ROOT.'/public/API/');    // API
define('STATIC', SYSTEM_ROOT.'/public/assets/');    // 静态文件
define('LIBS', SYSTEM_ROOT.'/public/libs/');    // 插件库
//
define('RUNTIME', SYSTEM_ROOT.'/data/runtime/');    // 缓存
// 核心模块

require SYSTEM_ROOT.'/public/inc/inc.php';
