<?php
$dbConfig = include('Common/Conf/db_config.php');
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
    '微信二维码'  => 'ERWEIMA',
    '素描'    => 'SUMIAO',
    '色彩'    => 'SECAI',
    '速写'    => 'SUXIE',
    '学生作品' => 'STUDENT',
    '明星师资' => 'TEACHER',
    '历届成绩' => 'ACHIEVEMENT',
    '作品展示' => 'WORKS',
    '教学环境' => 'ENVIRONMENT',
    '教学安排' => 'EDUCATION',
    '生活安排' => 'LIFE',
    '1977介绍' => 'INTRODUCTION',
    '办学特色' => 'SPECIAL',
    '关于我们' => 'ABOUT',
    '分页'    => 11,
    '电话'    => 'PHONE',
    '备案'    => 'BEIAN',
    '版权'    => 'BANQUAN',
    '地址'    => 'ADDRESS',
);

return array_merge($appConfig, $dbConfig);