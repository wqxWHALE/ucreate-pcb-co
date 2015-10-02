<?php
$dbConfig = include('Common/Conf/db_config.php');
$publicConfig = include('Common/Conf/public.php');
$appConfig =  array(
    // 调试页
    'SHOW_PAGE_TRACE' =>false,

    // 默认模块和Action
    'MODULE_ALLOW_LIST' => array('Home'),
    'DEFAULT_MODULE' => 'Home',

    // 默认控制器
    'DEFAULT_CONTROLLER' => 'Index',

    //URL模式
    //'URL_MODEL' => '1',

    // 设置cookie保存的时间
    'SAVE_COOKIE_TIME' => 7200,

    '左'   => 1,
    '右'  => 2,
    'TOP'    => 1,
    'BOTTOM' => 0, 
    '分页'    => 11,
);

return array_merge($appConfig, $dbConfig, $publicConfig);