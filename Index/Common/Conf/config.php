<?php
$dbConfig     = include('Common/Conf/db_config.php');
$publicConfig = include('Common/Conf/public.php');
$appConfig =  array(
    // 调试页
    'SHOW_PAGE_TRACE' =>false,

    // 默认模块和Action
    'MODULE_ALLOW_LIST' => array('Home'),
    'DEFAULT_MODULE' => 'Home',

    // 默认控制器
    'DEFAULT_CONTROLLER' => 'Index',

    // 文件上传根目录
    'UPLOAD_ROOT' => WEB_ROOT . 'Public/uploads/',
    // 系统公用配置目录
    'COMMON_CONF_PATH' => WEB_ROOT . 'Common/Conf/',

    // 设置cookie保存的时间
    'SAVE_COOKIE_TIME' => 7200,
);

return array_merge($appConfig, $dbConfig, $publicConfig);