<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Date: 2015/9/17 10:00pm
// +----------------------------------------------------------------------
// | Author: chenmingbiao <mbillchan@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',false);

// 定义应用目录
define('APP_PATH','./Admin/');

// 运行缓存目录
define("RUNTIME_PATH", "./Cache/Runtime/Admin/");

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';


