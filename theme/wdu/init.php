<?php
header("Access-Control-Allow-Origin: *");
// 公共入口模块，用于引入各个模块

// error_reporting(E_ERROR | E_WARNING | E_PARSE);

define('movie', 'on');

define('SYSTEM_ROOT', dirname(__FILE__));    // 系统目录

// 系统配置模块
require SYSTEM_ROOT.'/config.php';
//
require SYSTEM_ROOT.'/inc/Paginator.php';
// 封装函数模块
require SYSTEM_ROOT.'/inc/functions.php';

// 前端 UI
require SYSTEM_ROOT.'/inc/ui.php';


